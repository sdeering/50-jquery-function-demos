The .bind() function is very useful for <strong>adding event triggers & handlers to your DOM elements</strong>. If you didn't know, there is a whole <a href="http://www.jquery4u.com/events/jquery-list-events-bind/" target="_blank" >list of events</a> which you can bind your DOM elements to such as <i>submit, change, mouseenter, mouseleave etc.</i></p>

<p>You may have also seen .click() used in jQuery code. As far as I know, there is no functional difference between .bind('click') and .click() but the benefits lie with much cleaner code (espescially when binding to mutiple events) and the ability to specify custom events and add data parameters.</p>

<p>Note: You can also use the <strong>.unbind()</strong> function to any of the binded events.</p>

<p>The key difference between the "keydown" and the "keypress" events is that the latter captures each individual character enetered as opposed to just firing once per key press. I've made a quick only demo to <a href="http://www.jquery4u.com/events/find-keycode-keyboard-key-press" target="_blank" >find out the keycodes for any key</a> pressed.