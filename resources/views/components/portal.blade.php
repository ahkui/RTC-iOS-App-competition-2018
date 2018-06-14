<section class="features" id="portal">
    <div class="container">
        <h2 class="text-center display-4">大賽報名</h2>
        <div class="row justify-content-around">
            <div class="feature-col col-12 col-md-4">
                <div class="card card-block text-center" style="cursor: pointer;" onclick="window.location='{{route('register')}}'">
                    <div>
                        <div class="feature-icon">
                            <span class="fas fa-rocket"></span>
                        </div>
                    </div>
                    <div>
                        <h3>報名</h3>
                        <p>
                            須完整填寫報名資料，每⽀參賽隊伍，含指導⽼師，最多不得超過5名成員。
                        </p>
                    </div>
                </div>
            </div>
            <div class="feature-col col-12 col-md-4">
                <div class="card card-block text-center" style="cursor: pointer;" onclick="window.location='{{route('team.register.form.uplaod')}}'">
                    <div>
                        <div class="feature-icon">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div>
                        <h3>決賽隊伍 繳交書面報名表</h3>
                        <p> 凡進入決賽隊伍，{{Carbon::parse(Setting::get('proposal_deadline', '2018-5-21'), 'Asia/Taipei')}} 前須提交參賽隊伍所在學校系所用印後的報名表(請至網頁上6/15比賽流程內下載附件)，文件需整併成一個PDF檔，不限制檔案名稱，任一人未於時間內繳交者，則取消該隊決賽資格。</p>
                    </div>
                </div>
            </div>
            <div class="feature-col col-12 col-md-4">
                <div class="card card-block text-center" style="cursor: pointer;" onclick="window.location='{{route('team.app.uplaod')}}'">
                    <div>
                        <div class="feature-icon">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div>
                        <h3>決賽隊伍 繳交App作品</h3>
                        <p> 決賽隊伍請於 6/15~7/20上傳資料, 詳細內容請<a href="{{route('team.app.uplaod')}}">點我</a>謝謝。 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>