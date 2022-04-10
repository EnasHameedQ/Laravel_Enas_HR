@extends('dashboard.layout.master')
@section('content')

<!--start content -->

<div id="chat" class="col-lg-6 col-md-6 col-sm-8 col-8">
    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">

        <div class="au-inbox-wrap">
            <div class="au-chat au-chat--border">
                <div class="au-chat__title">
                    <div class="au-chat-info">
                        <div class="avatar-wrap online">
                            <div class="avatar avatar--small">
                                <img src="assests/imges/boy.png" alt="John Smith">

                            </div>
                        </div>
                        <span class="nick">
                            <a href="#">إيناس القعادي</a>
                        </span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>
                <div class="au-chat__content au-chat__content2 js-scrollbar5">
                    <div class="recei-mess-wrap">
                        <span class="mess-time"> منذ ١٢دقيقة</span>
                        <div class="recei-mess__inner">
                            <div class="avatar avatar--tiny">
                                <img src="assests/imges/boy.png" alt="John Smith">
                            </div>
                            <div class="recei-mess-list">
                                <div class="recei-mess">اليلام عليكم ورحمة الله وبركاته كيف الحال</div>
                                <div class="recei-mess">اليوم معانا مذاكرة الوحدة الاولى لا تتسي 😁</div>
                                <div class="recei-mess">الحمد الله</div>
                            </div>
                        </div>
                        <div class="grad-rec">
                            <hr>
                        </div>
                    </div>

                    <div class="send-mess-wrap">
                        <span class="mess-time">30 Sec ago</span>
                        <div class="send-mess__inner">

                            <div class="send-mess-list">
                                <div class="send-mess">الحمد الله 😊 </div>
                                <div class="send-mess">ان شاء الله تسلمي </div>
                                <div class="send-mess">الوحدة مؤلمة لكنّها أفضل من أن يتذكرك الآخرون في وقت فراغهم. اصنع لنفسك أياماً جميلة ولا تنتظر جمال أيامك من أحد. إذا صلح حالك مع الله صلحت أحوالك مع الناس. من السهل أن تجد شخصاً تتحدث إليه، لكن من الصعب أن
                                    تجد شخصاً تثق به. </div>
                            </div>
                            <div class="avatar avatar--tiny">
                                <img src="assests/imges/girl.png" alt="John Smith">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="au-chat-textfield">
                    <form class="au-form-icon">
                        <button id="iconchat">
                            <i class='fa fa-send'></i>
                        </button>
                        <input class="au-input au-input--full au-input--h65 " type="text" placeholder="اكتب اي شئ">
                        <button id="icon-chat">
                            <i class='fas fa-paperclip'></i>
                            <i class='far fa-smile'></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="chat1" class="col-lg-3 col-md-3 col-sm-12 col-12">
    <div class="au-card-title">
        <div class="bg-overlay"></div>
        <h3>
            <i class="zmdi zmdi-comment-text"></i>Chat
        </h3>
        <button class="au-btn-plus">
            <i class="zmdi zmdi-plus"></i>
        </button>
    </div>
    <div class="au-card au-card--no-shadow au-card--no-pad m-b-41 au-card--border">
        <div class="au-task js-list-load au-task--border">

            <div class="au-task-list js-scrollbar3">
                <div class="au-task__item au-task__item">
                    <div class="au-task__item-inner">
                        <span class="nick">
                            <a href="#">teacher fadi</a>
                        </span>
                        <div class="avatar avatar--tiny">
                            <img src="assests/imges/boy.png" alt="John Smith">

                        </div>

                        <h5 class="task">

                            <a href="#">مقابلة عمل للساعة ١٠:٤٠ في مبنى الشركة مقابل جولة المصباحي</a>
                        </h5>
                        <span class="time">10:00 AM</span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>
                <div class="au-task__item au-task__item">

                    <div class="au-task__item-inner">
                        <span class="nick">
                            <a href="#">الاستاذة فدوى </a>
                        </span>
                        <div class="avatar avatar--tiny">
                            <img src="assests/imges/boy.png" alt="John Smith">
                        </div>

                        <h5 class="task">
                            <a href="#">Create new task for Dashboard</a>
                        </h5>
                        <span class="time">11:00 AM</span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>
                <div class="au-task__item au-task__item">

                    <div class="au-task__item-inner">
                        <span class="nick">
                            <a href="#">الاستاذة رضوى</a>
                        </span>
                        <div class="avatar avatar--tiny">
                            <img src="assests/imges/boy.png" alt="John Smith">
                        </div>
                        <h5 class="task">
                            <a href="#">مقابلة عمل للساعة ١٠:٤٠ في مبنى الشركة مقابل جولة المصباحي</a>
                        </h5>
                        <span class="time">02:00 PM</span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>

                <div class="au-task__item au-task__item">
                    <div class="au-task__item-inner">
                        <span class="nick">
                            <a href="#">teacher enas </a>
                        </span>
                        <div class="avatar avatar--tiny">
                            <img src="assests/imges/boy.png" alt="John Smith">

                        </div>

                        <h5 class="task">
                            <a href="#">مقابلة عمل للساعة ١٠:٤٠ في مبنى الشركة مقابل جولة المصباحي</a>
                        </h5>
                        <span class="time">03:30 PM</span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>
                <div class="au-task__item au-task__item js-load-item">
                    <div class="au-task__item-inner">
                        <span class="nick">
                            <a href="#">teacher enas </a>
                        </span>
                        <div class="avatar avatar--tiny">
                            <img src="assests/imges/boy.png" alt="John Smith">
                        </div>

                        <h5 class="task">
                            <a href="#">Meeting about plan for Admin Template 2018</a>
                        </h5>
                        <span class="time">10:00 AM</span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>
                <div class="au-task__item au-task__item js-load-item">
                    <div class="au-task__item-inner">
                        <span class="nick">
                            <a href="#">teacher enas </a>
                        </span>
                        <div class="avatar avatar--tiny">
                            <img src="assests/imges/boy.png" alt="John Smith">

                        </div>
                        <h5 class="task">
                            <a href="#">انشاء مشروع </a>
                        </h5>
                        <span class="time">11:00 AM</span>
                    </div>
                    <div class="grad-rec">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="au-task__footer">
                <a href="#" class="join-now"><span>المزيد </span></a>
                <!--  <button class="au-btn au-btn-load js-load-btn">load more</button>-->
            </div>
        </div>
    </div>
</div>
</div>
<!-- END row-->
@endsection