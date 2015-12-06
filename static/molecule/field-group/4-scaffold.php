<form class="scaffold-form">
    <fieldset>

        <legend>Legendary</legend>

        <div class="field-group field-group--scaffold">
            <label for="text" class="field-group__label">Text Input <abbr title="Required">*</abbr></label>
            <div class="field-group__field">
                <input id="text" type="text" placeholder="Text Input">
            </div>
        </div>

        <div class="field-group">
            <label for="password" class="field-group__label">Password</label>
            <div class="field-group__field">
                <input id="password" type="password" placeholder="Type your Password">
            </div>
        </div>

        <div class="field-group">
            <label for="textarea" class="field-group__label">Textarea</label>
            <div class="field-group__field">
                <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
            </div>
        </div>

        <div class="field-group">
            <label for="select" class="field-group__label">Choose an option</label>
            <div class="field-group__field">
                <select id="select">
                    <optgroup label="Option Group">
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="field-group">
            <label for="radio1" class="field-group__label">Choose an option</label>
            <div class="field-group__field">
                <div class="field-group field-group--inline">
                    <label class="field-group__label">
                        <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                        Option 1
                    </label>
                </div>
                <div class="field-group field-group--inline">
                    <label class="field-group__label">
                        <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                        Option 1
                    </label>
                </div>
                <div class="field-group field-group--inline">
                    <label class="field-group__label">
                        <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                        Option 1
                    </label>
                </div>
            </div>
        </div>

        <div class="field-group field-group--inline">
            <div class="field-group__field">
                <input type="checkbox" id="is_subscribed" name="is_subscribed" value="1" class="checkbox">
            </div>
            <div class="field-group__label">
                <label for="is_subscribed">Subscribe to the newsletter to receive store news and offers via email.</label>
            </div>
        </div>

        <input type="submit" class="btn" value="Submit" />

    </fieldset>
</form>
