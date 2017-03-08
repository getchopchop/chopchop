<?php /*
Title: Modal
Class: .modal
Description: The modal is hidden off screen by default. <a href="#" class="js-cc-toggle js-modal-content-1 " data-cc-toggle-action="activate" data-cc-toggle-target="#modal-tab-1">Show modal 1 content</a> or <a href="#" class="js-cc-toggle js-modal-content-2" data-cc-toggle-action="activate" data-cc-toggle-target="#modal-tab-2">Show modal 2 content</a>.
*/ ?>

<div class="modal" id="modal" data-cc-toggle-keyboard-close="true" data-cc-toggle-target-callback="#overlay" data-cc-toggle-trigger-type="direct-only" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">
    <div class="modal__dialog">

        <div id="modal-tab-1" data-cc-toggle-target="#modal"  data-cc-toggle-target-callback=".close, .js-modal-content-1" data-cc-toggle-group="modal-tabs" class="u-toggle modal-tab">
            <div class="card">
                <div class="card__header">
                    <h2>Modal Content 1</h2>
                </div>
                <div class="u-block">
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


                    <p>In convallis sem quis risus suscipit efficitur. Vivamus neque nisl, aliquam ac auctor nec, dignissim ac elit. Vivamus et enim augue. Cras mauris ex, pretium eget erat in, hendrerit tempus elit. Nam nisl tortor, vestibulum at arcu sit amet, posuere tincidunt enim. Nunc luctus sagittis sapien, quis tempor ligula mattis scelerisque. Quisque condimentum justo massa, vel egestas enim tempus et. Cras iaculis ex a velit molestie tempor. Aliquam aliquet faucibus rutrum. Aenean pharetra mattis imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque cursus risus non magna lobortis fermentum. Nulla accumsan nulla ac elit blandit, sed porta quam condimentum.</p>
                </div>
                <div class="card__footer">
                    <a href="#" class="close" data-cc-toggle-action="deactivate" data-cc-toggle-target="#modal">Close</a>
                </div>
            </div>

        </div>

    </div>
</div>
