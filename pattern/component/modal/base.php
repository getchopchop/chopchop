<div class="modal" id="modal" data-cc-toggle-target-callback="#overlay" data-cc-toggle-trigger-type="direct-only" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">
    <div class="modal__dialog">

        <div id="modal-tab-1" data-cc-toggle-target="#modal"  data-cc-toggle-target-callback=".close, .js-modal-content-1" data-cc-toggle-group="modal-tabs" class="u-toggle modal-tab">
            <div class="card">
                <div class="card__header">
                    <h2>Modal Content 1</h2>
                </div>
                <div class="u-block"> <a href="https://daveredfern.com">Hello</a>
                    <?php printPattern('base/paragraph/base'); ?>
                </div>
                <div class="card__footer">
                    <a href="#" class="close" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">Close</a>
                </div>
            </div>
        </div>

        <div id="modal-tab-2" data-cc-toggle-target="#modal" data-cc-toggle-target-callback=".close, .js-modal-content-2" data-cc-toggle-group="modal-tabs" class="u-toggle modal-tab">
            <div class="card">
                <div class="card__header">
                    <h2>Modal Content 2</h2>
                </div>
                <div class="u-block"><a href="https://daveredfern.com">Hello</a>
                    <?php printPattern('base/paragraph/base'); ?>
                </div>
                <div class="card__footer">
                    <a href="#" class="close" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">Close</a>
                </div>
            </div>

        </div>

    </div>
</div>
