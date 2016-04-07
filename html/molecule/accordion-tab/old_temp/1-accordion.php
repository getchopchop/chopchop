<?php /*
Title: Accordion
Class: .accordion
*/ ?>

<div class="accordion">
    <div class="is-active accordion__header"
        id="tabs1-tab1"
        data-cc-group="tabs1"
        data-cc-action="activate"
        data-cc-target="tabs1-content1">
        <h3>Tab 1</h3>
    </div>
    <div class="is-active accordion__body"
        id="tabs1-content1"
        data-cc-group="tabs1-content"
        data-cc-cascade="tabs1-tab1">
        <p>tab 1 content</p>
    </div>
    <div class="is-inactive accordion__header"
        id="tabs1-tab2"
        data-cc-group="tabs1"
        data-cc-action="activate"
        data-cc-target="tabs1-content2">
        <h3>Tab 2</h3>
    </div>
    <div class="is-inactive accordion__body"
        id="tabs1-content2"
        data-cc-group="tabs1-content"
        data-cc-cascade="tabs1-tab2">
        <p>tab 2 content</p>
    </div>
    <div class="is-inactive accordion__header"
        id="tabs1-tab3"
        data-cc-group="tabs1"
        data-cc-action="activate"
        data-cc-target="tabs1-content3">
        <h3>Tab 3</h3>
    </div>
    <div class="is-inactive accordion__body"
        id="tabs1-content3"
        data-cc-group="tabs1-content"
        data-cc-cascade="tabs1-tab3">
        <p>tab 3 content</p>
    </div>
    <div class="is-inactive accordion__header"
        id="tabs1-tab4"
        data-cc-group="tabs1"
        data-cc-action="activate"
        data-cc-target="tabs1-content4">
        <h3>Tab 4</h3>
    </div>
    <div class="is-inactive accordion__body"
        id="tabs1-content4"
        data-cc-group="tabs1-content"
        data-cc-cascade="tabs1-tab4">
        <p>tab 4 content</p>
    </div>
</div>
