The jQuery library has a full suite of AJAX capabilities which <strong>allows us to load data from a server without refresh the browser page</strong>. In this section, we will have a quick look at refreshing page content, loading scripts and retrieveing data from different web pages/servers.</p>

<h3>$.ajax()</h3>
<p>$.ajax() is arguably the most revolutionary jQuery function. It provides us with means of <strong>dynamically loading content, scripts and data</strong> and using them on our live web page. Other common uses include submitting a form using AJAX and sending data to server side scripts which can store it in a database.</p>

<p><strong>Important AJAX settings to note:</strong></p>
<ul>
    <li><strong>url</strong> - The target of the request.</li>
    <li><strong>type</strong> - The type of HTTP request either: "GET" (Default) or "POST".<br/><a href="http://www.jquery4u.com/ajax/key-differences-post/" target="_blank">Difference between GET and POST.</a></li>
    <li><strong>async</strong> - Set asyncronous to TRUE if you want it to load in background and this will allow you to run mutiple AJAX requests at the same time. If you set to FALSE the request will run and then wait for the result before preceeding with the rest of you code.</li>
    <li><strong>data</strong> - Specify data you wish to pass with the AJAX call in "{param1: 'value1'}" format.</li>
    <li><strong>dataType</strong> - Specify the type of data that is returned: "xml/html/script/json/jsonp".</li>
    <li><strong>success</strong> - The function that is fired when the AJAX call has completed successfully.</li>
    <li><strong>error</strong> - The function that is fired when the AJAX call encountered errors.</li>
    <li><strong>jsonp</strong> - Allows you to specify a callback function when making cross domain AJAX calls.</li>
    <li><strong>timeout</strong> - You can also set a timeout on the AJAX call in milliseconds.</li>
</ul>

<p>As you can see $.ajax() has lots of settings (I have only listed the main ones above). In light of this, they have provided us with many <strong>shorthand methods already contain the settings we require</strong>. I know some developers who still like to write the full AJAX settings out. Reasons for this might be that they wish to see all the settings to be sure or .get() and $.post() failed to return errors in jQuery < 1.5 which I believe has since been fixed. It is also worth knowing that you can use the Firebug NET.panel to <a href="http://www.jquery4u.com/testing/http-request-net-panel-httpfox-fiddler2/" target="_blank">Analyse HTTP Requests</a> for testing, monitoring & debugging AJAX calls.