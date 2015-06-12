<!-- Template: _player !-->
<div class="section preview">
    <div class="container">
        <div class="player">
            <div class="player__info">
                <p class="player__artwork"><a href="#"><img src="https://placeimg.com/100/100/tech"></a></p>
                <p class="player__title"><a href="#">LA Pop Vocal Sessions Vol 1</a></p>
            </div>
            <div class="player__wave">
                <p><img src="https://placeimg.com/400/100/tech"></p>
            </div>
            <div class="player__controls">
                <ul>
                    <li class="player__backward"><a href="#"><img src="images/player-backward.svg" width="15px" height="15px" alt="Skip backwards"></a></li>
                    <li class="player__play"><a href="#"><img src="images/player-play.svg" width="25px" height="25px" alt="Play / pause"></a></li>
                    <li class="player__forward"><a href="#"><img src="images/player-forward.svg" width="15px" height="15px" alt="Skip forward"></a></li>
                </ul>
            </div>
            <div class="player__volume">
                <p><img src="https://placeimg.com/400/100/tech"></p>
            </div>
            <div class="player__price">
                <p>&pound;19.95 <span>GBP</span></p>
            </div>
            <div class="player__buttons">
                <ul>
                    <li class="player__buy"><a href="#" class="btn btn--primary btn--sm">Add to Cart</a></p></li>
                    <li class="player__queue"><a href="#"><img src="images/playlist.svg" height="18px" width="18px" alt="Playlist"></a></li>
                    <li class="player__fav"><a href="#"><img src="images/favourite.svg" height="18px" width="18px" alt="Favourite track"></a></li>
                </ul>
            </div>
            <div class="player__toggle">
                <p><a href="#"><span><img src="images/up.svg"></span> Open</a></p>
            </div>
        </div>
        <div class="playlist">
            <h2>Your playlist</h2>
            <div class="playlist__tracks">
                <?php for($i = 0; $i <= 10; $i++) : ?>
                    <div class="playlist__track">
                        <p class="playlist__artwork"><img src="https://placeimg.com/100/100/tech"></p>
                        <div class="playlist__info">
                            <h3 class="playlist__title"><a href="#">Fturue Deep House Vol 1</a></h3>
                            <p class="playlist__artist"><a href="#">Loopmasters</a></p>
                        </div>
                        <div class="player__buttons">
                            <ul>
                                <li class="player__delete"><a href="#"><img src="images/delete.svg" height="20px" width="20px" alt="Delete track"></a></li>
                                <li class="player__play"><a href="#"><img src="images/play.svg" height="20px" width="20px" alt="Play / Pause"></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<!-- End template: _player !-->
