<div class="modal" id="modal" data-cc-toggle-target-callback="#overlay" data-cc-toggle-trigger-type="direct-only" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">
    <div class="modal__dialog">

        <div id="modal-tab-1" data-cc-toggle-target="#modal"  data-cc-toggle-target-callback=".close, .js-modal-content-1" data-cc-toggle-group="modal-tabs" class="u-toggle modal-tab">
            <div class="card">
                <div class="card__header">
                    <h2>Modal Content 1</h2>
                </div>
                <div class="u-block">
                    <?php printPattern('base/paragraph/base'); ?>
                    <p>Vestibulum varius sem vitae diam venenatis porttitor. <a href="http://google.com">Pellentesque</a> nec quam eget eros tincidunt mattis non ac nunc. Vivamus tristique, turpis vitae efficitur laoreet, eros tellus lobortis nulla, ac auctor neque velit at risus. Sed volutpat dolor erat, placerat malesuada quam tempor eu. Morbi a tellus sit amet lectus tincidunt imperdiet a tincidunt est. Cras vel volutpat mauris. Sed consectetur felis vel maximus elementum. Proin sed nisl lectus. Nunc non est ac ipsum gravida commodo vel quis nunc.</p>
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
                <div class="u-block">
                    <?php printPattern('base/paragraph/base'); ?>
                </div>
                <div class="card__footer">
                    <a href="#" class="close" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">Close</a>
                </div>
            </div>

        </div>

    </div>
</div>
