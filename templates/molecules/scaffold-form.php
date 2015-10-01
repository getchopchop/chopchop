<div class="u-container">
    <h2>Scaffold Form</h2>
    
    <form class="scaffold-form form--reverse">
        <fieldset class="fields">
            
            <legend>Legendary</legend>
            
            <div class="fields__group">
                <label for="text" class="fields__label">Text Input <abbr title="Required">*</abbr></label>
                <div class="fields__field">
                    <input id="text" type="text" placeholder="Text Input">
                </div>
            </div>
            
            <div class="fields__group">
                <label for="password" class="fields__label">Password</label>
                <div class="fields__field">
                    <input id="password" type="password" placeholder="Type your Password">
                </div>
            </div>
            
            <div class="fields__group">
                <label for="textarea" class="fields__label">Textarea</label>
                <div class="fields__field">
                    <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
                </div>
            </div>
            
            <div class="fields__group">
                <label for="select" class="fields__label">Choose an option</label>
                <div class="fields__field">
                    <select id="select">
                        <optgroup label="Option Group">
                            <option>Option One</option>
                            <option>Option Two</option>
                            <option>Option Three</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="fields__group">
                <label for="radio1" class="fields__label">Choose an option</label>
                <div class="fields__field">
                    <label for="radio1">
                        <input id="radio1" name="radio" type="radio" class="radio" checked="checked">
                        Option 1
                    </label>
                    <label for="radio2">
                        <input id="radio2" name="radio" type="radio" class="radio">
                        Option 2
                    </label>
                    <label for="radio3">
                        <input id="radio3" name="radio" type="radio" class="radio">
                        Option 3
                    </label>
                </div>
            </div>
            
            <div class="fields__group fields__group--control">
                <input type="checkbox" id="is_subscribed" name="is_subscribed" value="1" class="checkbox">
                <label for="is_subscribed">Subscribe to the newsletter to receive store news and offers via email.</label>
            </div>
            
            <input type="submit" class="btn" value="Submit" />
            
        </fieldset>
    </form>
    
    
</div>