@extends('layouts.master')
@section('content')
    <!-- main -->
        <main>
            <div class="main">
                <div class="container">
                    <div class="container-hiro-detail">
                        <img class="hiro-detail" src="{{ asset('assets/img/img-e/'.$photo->file_location) }}">
                    </div>
                    <div class="bar-fun-conainer">
                        <div>
                             @if ($data_favorite)
                                <form id="formFavorite">
                                    @csrf
                                    <input type="hidden" value="{{ $photo->id }}" name="photo_identifier">
                                    <p class="bi bi-star-fill" id="btn-favorite"> Add to Favourites</p>
                                </form>
                             @else
                                <form id="formFavorite">
                                    @csrf
                                    <input type="hidden" value="{{ $photo->id }}" name="photo_identifier">
                                    <p class="bi bi-star" id="btn-favorite"> Add to Favourites</p>
                                </form>
                             @endif                           
                        </div>
                        <div>
                            <p class="bi bi-hand-thumbs-up" id="btn-like"> 280k</p>
                        </div>
                        <div>
                            <p class="bi bi-chat-dots" id="btn-comment"> 239k</p>
                        </div>
                    </div>
                    <h1 class="img-title-detail">{{ $photo->photo_title }}</h1>
                    <div class="profile-container">
                        <a href="profile.html">
                        <div class="img-profile-container">
                            <img class="profile-image-detail" src="{{ asset('assets/img/profile/'.$photo->user->picture ) }}">
                        </div>
                        </a>
                        <div class="text-profile">
                                <div>
                                    <h3 class="username-text-detail">{{ $photo->user->name }} <img src="{{ asset('assets/img/private.png') }}"></h3>
                                    <p>Followers</p>
                                    <h5>{{ $data_user->followTo->count() }}</h5>
                                </div>
                            <div>
                                @if ($photo->user->uuid !== Auth::user()->uuid)
                                    @if ($data_follow)
                                        <form id="followFormDetail">
                                            @csrf
                                            <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}" id="user-identifier">
                                            <button type="button" class="btn-donefollow-imgDetail" id="button-follow-imgdetail"><i class='bi bi-person-plus-fill' id="icon-follow-img-detail"></i> <span id="follow-text-imgdetail">Unfollow</span></button>
                                        </form>
                                    @else
                                        <form id="followFormDetail">
                                            @csrf
                                            <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}" id="user-identifier">
                                            <button type="button" class="btn-follow-imgDetail" id="button-follow-imgdetail"><i class='bi bi-person-x-fill' id="icon-follow-img-detail"></i> <span id="follow-text-imgdetail">Follow</span></button>
                                        </form>
                                    @endif
                                @else
                                    <form id="followFormDetail" hidden>
                                        @csrf
                                        <input name="user_identifier" type="hidden" value="{{ $photo->user->id }}" id="user-identifier">
                                        <button type="button" class="btn-follow-imgDetail" id="button-follow-imgdetail"><i class='bi bi-person-plus-fill' id="icon-follow-img-detail"></i> <span id="follow-text-imgdetail">Follow</span></button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    <p class="description">
                        {{ $photo->photo_description }}
                    </p>
                    <div>
                        <button class="category-tag">{{ $photo->category->name }}</button>
                    </div>
                    <div class="container-comment">
                        <h2>Comment 239k</h2>
                        <div class="comment-wrapping">
                            <div class="comment-body">
                                <div class="image-comment-container">
                                    <img class="image-comment" src="{{ asset('assets/img/img-p/2.png') }}" alt="">
                                </div>
                                <div class="comment-card-nody">
                                    <div class="comment-elemet-text">
                                        <div class="comment-text-head">
                                            <h4>You</h4>
                                        </div>
                                        <p class="comment-text">
                                            <form action="">
                                                <div class="input-comment-container">
                                                    <input type="text" class="input-comment" placeholder="Leave a comment..">
                                                    <button class="send-comment-button"><i class="bi bi-send-fill"></i></button>
                                                </div>
                                            </form>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="image-comment-container">
                                    <img class="image-comment" src="{{ asset('assets/img/img-p/3.jpg') }}" alt="">
                                </div>
                                <div class="comment-card-nody">
                                    <div>
                                        <div class="comment-text-head">
                                            <h4>Nincen</h4>
                                            <p class="time-comment">1 minute ago</p>
                                        </div>
                                        <p class="comment-text">Mauris massa. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="image-comment-container">
                                    <img class="image-comment" src="{{ asset('assets/img/img-p/1.jpg') }}" alt="">
                                </div>
                                <div class="comment-card-nody">
                                    <div>
                                        <div class="comment-text-head">
                                            <h4>Senzi</h4>
                                            <p class="time-comment">1 minute ago</p>
                                        </div>
                                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="image-comment-container">
                                    <img class="image-comment" src="{{ asset('assets/img/img-p/5.jpg') }}" alt="">
                                </div>
                                <div class="comment-card-nody">
                                    <div>
                                        <div class="comment-text-head">
                                            <h4>Younsi</h4>
                                            <p class="time-comment">1 minute ago</p>
                                        </div>
                                        <p class="comment-text">Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-body">
                                <div class="image-comment-container">
                                    <img class="image-comment" src="{{ asset('assets/img/img-p/3.jpg') }}" alt="">
                                </div>
                                <div class="comment-card-nody">
                                    <div>
                                        <div class="comment-text-head">
                                            <h4>Rayyns</h4>
                                            <p class="time-comment">1 minute ago</p>
                                        </div>
                                        <p class="comment-text">Mauris massa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- //main -->
    <script src="{{ asset('assets/js/img_detail/img_detail.js') }}"></script>
@endsection