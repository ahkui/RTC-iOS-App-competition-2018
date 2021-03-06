<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdateTeamRegistration extends Notification implements ShouldQueue
{
    use Queueable;
    private $oldEmail;
    private $newEmail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($oldEmail, $newEmail)
    {
        $this->oldEmail = $oldEmail;
        $this->newEmail = $newEmail;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject('2018 APP移動應用創新賽 資料更動')
            ->greeting('親愛的參賽者您好：')
            ->line("隊長已將您的電子郵件($this->oldEmail)更改至此電子郵件($this->newEmail)，貼心提醒您競賽日程相關如下，並預祝您贏得佳績！")
            ->line('1.  線上報名：2018年4月16日〜5月8日填寫報名資料，團隊成員於報名截止日後，不得更換。')
            ->line('2.  企劃書提交：2018年5月1日〜5月23日繳交附件一請以A4版面書寫5至10頁以內，另作封面註明隊伍名稱與作品名稱，檔案格式請存成 PDF 檔，檔案名稱須同【聯絡人學校_聯絡人系級_聯絡人姓名_參賽APP名稱_企劃書】，檔案大小請避免超過10MB。')
            ->line('3.  初選結果公佈：2018年6月15日前於比賽官網公佈20隊進入決賽作品。')
            ->line('4.  決賽隊伍繳交書面報名表：2018年6月30日前繳交。凡進入決賽隊伍，須提交參賽隊伍所在學校系所用印後的報名表，如附件二，文件需整併成一個PDF檔，檔案名稱須同【聯絡人學校_聯絡人系級_聯絡人姓名_參賽APP名稱】。若有成員未滿二十歲者，需再繳交「法定代理人同意書」，任一人未於時間內繳交者，則取消該隊決賽資格，由下一順序之參賽隊伍遞補。')
            ->line('5.  實作APP作品：2018年6月15日～7月20日繳交')
            ->line('6.  決賽現場：2018年8月2日於逢甲大學進行決賽，現場展演、答辯及評選，現場必須使用Apple硬體為載具進行展演，設備需自行攜帶。')
            ->line('7.  大中華區總決賽：2018 年 9 月中旬，於浙江大學舉辦。')
            ->action('官網', url(config('app.url')))
            ->line('聯繫方式')
            ->line('比賽網站：https://rtc-2018.fcu.edu.tw')
            ->line('聯繫信箱：stacse@straighta.com.tw')
            ->line('聯繫電話：Straight A客服專線（02）6608-1000')
            ->line('感謝您參與!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Get the tags that should be assigned to the job.
     *
     * @return array
     */
    public function tags()
    {
        return ['UpdateTeamRegistration'];
    }
}
