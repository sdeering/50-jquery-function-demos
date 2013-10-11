<strong>Change your website styles dynamically</strong> with jQuery's .css() function. You can change any styles you would normally declare in a Stylesheet such as "color" (text colour), "background-color", "font-size" etc. You can both get and set the current styles for a specified element. I prefer to use the following syntax as it gives greater flexibilty when changing mutiple styles.
<br/>
<pre class="raw">$('selector').css({
  "property":"value",
  "propertyN":"valueN"
});</pre>