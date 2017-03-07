<div class="drawer drawer--right" id="drawer-right" data-cc-toggle-target-callback="#overlay">
    <div class="drawer__dialog">

        <div id="drawer-right-1" class="u-toggle" data-cc-toggle-target="#drawer-right" data-cc-toggle-group="drawer-right-contents">
            <div class="card">
                <div class="card__header">
                    <h2>Right Drawer Panel 1</h2>
                </div>
                <div class="u-block">
                    <p><a href="#" data-cc-toggle-target="#drawer-right-2" data-cc-toggle-action="activate">Right Drawer Panel 2</a></p>
                    <?php printPattern('base/paragraph/base'); ?>
                    <?php printPattern('base/paragraph/base'); ?>
                </div>
                <div class="card__footer">
                    <p><a href="#" data-cc-toggle-action="deactivate" data-cc-toggle-target="#drawer-right" class="btn">Close</a></p>
                </div>
            </div>
        </div>

        <div id="drawer-right-2" class="u-toggle" data-cc-toggle-target="#drawer-right" data-cc-toggle-group="drawer-right-contents">
            <div class="card">
                <div class="card__header">
                    <h2>Right Drawer Panel 2</h2>
                </div>
                <div class="u-block">
                    <p><a href="#" data-cc-toggle-target="#drawer-right-1" data-cc-toggle-action="activate">Back to Right Drawer Panel 1</a></p>
                </div>
                <div class="card__footer">
                    <p><a href="#" data-cc-toggle-action="deactivate" data-cc-toggle-target="#drawer-right" class="btn">Close Drawer</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
