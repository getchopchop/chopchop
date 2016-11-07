<?php /*
Title: Modal
Class: .modal
Description: The modal is hidden off screen by default. <a href="#" data-cc-action="activate" data-cc-target="modal-tab-1">Show modal 1 content</a> or <a href="#" data-cc-action="activate" data-cc-target="modal-tab-2">Show modal 2 content</a>.
*/ ?>

<div class="modal" id="modal" data-cc-cascade="overlay" data-cc-trigger-on="direct-only" data-cc-action="deactivate" data-cc-target="modal">
    <div class="modal__dialog">

        <div id="modal-tab-1" data-cc-cascade="modal" data-cc-group="modal-tabs" class="u-toggle">
            <div class="card">
                <div class="card__header">
                    <h2>Modal Content 1</h2>
                </div>
                <div class="u-block">
                    <p><a href="#" data-cc-action="activate" data-cc-target="modal-tab-2">Show Modal 2 Content</a></p>
                    <p>Vestibulum varius sem vitae diam venenatis porttitor. Pellentesque nec quam eget eros tincidunt mattis non ac nunc. Vivamus tristique, turpis vitae efficitur laoreet, eros tellus lobortis nulla, ac auctor neque velit at risus. Sed volutpat dolor erat, placerat malesuada quam tempor eu. Morbi a tellus sit amet lectus tincidunt imperdiet a tincidunt est. Cras vel volutpat mauris. Sed consectetur felis vel maximus elementum. Proin sed nisl lectus. Nunc non est ac ipsum gravida commodo vel quis nunc.</p>
                </div>
                <div class="card__footer">
                    <a href="#" data-cc-action="deactivate" data-cc-target="modal">Close</a>
                </div>
            </div>
        </div>

        <div id="modal-tab-2" data-cc-cascade="modal" data-cc-group="modal-tabs" class="u-toggle">
            <div class="card">
                <div class="card__header">
                    <h2>Modal Content 2</h2>
                </div>
                <div class="u-block">
                    <p><a href="#" data-cc-action="activate" data-cc-target="modal-tab-1">Show Modal 1 Content</a></p>

                    <p>In convallis sem quis risus suscipit efficitur. Vivamus neque nisl, aliquam ac auctor nec, dignissim ac elit. Vivamus et enim augue. Cras mauris ex, pretium eget erat in, hendrerit tempus elit. Nam nisl tortor, vestibulum at arcu sit amet, posuere tincidunt enim. Nunc luctus sagittis sapien, quis tempor ligula mattis scelerisque. Quisque condimentum justo massa, vel egestas enim tempus et. Cras iaculis ex a velit molestie tempor. Aliquam aliquet faucibus rutrum. Aenean pharetra mattis imperdiet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque cursus risus non magna lobortis fermentum. Nulla accumsan nulla ac elit blandit, sed porta quam condimentum.</p>
                </div>
                <div class="card__footer">
                    <a href="#" data-cc-action="deactivate" data-cc-target="modal">Close</a>
                </div>
            </div>

        </div>

    </div>
</div>
