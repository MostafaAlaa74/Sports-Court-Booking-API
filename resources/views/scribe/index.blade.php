<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.7.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.7.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-venues">
                                <a href="#endpoints-POSTapi-venues">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-venues--id-">
                                <a href="#endpoints-PUTapi-venues--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-venues--id-">
                                <a href="#endpoints-DELETEapi-venues--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-venues">
                                <a href="#endpoints-GETapi-venues">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-venues--id-">
                                <a href="#endpoints-GETapi-venues--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-courts">
                                <a href="#endpoints-POSTapi-courts">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-courts--id-">
                                <a href="#endpoints-PUTapi-courts--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-courts--id-">
                                <a href="#endpoints-DELETEapi-courts--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-courts">
                                <a href="#endpoints-GETapi-courts">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-courts--id-">
                                <a href="#endpoints-GETapi-courts--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bookings">
                                <a href="#endpoints-GETapi-bookings">GET api/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bookings">
                                <a href="#endpoints-POSTapi-bookings">POST api/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bookings--id-">
                                <a href="#endpoints-GETapi-bookings--id-">GET api/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-bookings--id-">
                                <a href="#endpoints-PUTapi-bookings--id-">PUT api/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-bookings--id-">
                                <a href="#endpoints-DELETEapi-bookings--id-">DELETE api/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bookings--booking_id--confirm">
                                <a href="#endpoints-POSTapi-bookings--booking_id--confirm">POST api/bookings/{booking_id}/confirm</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reviews">
                                <a href="#endpoints-POSTapi-reviews">POST api/reviews</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-reviews--id-">
                                <a href="#endpoints-PUTapi-reviews--id-">PUT api/reviews/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-reviews--id-">
                                <a href="#endpoints-DELETEapi-reviews--id-">DELETE api/reviews/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reviews">
                                <a href="#endpoints-GETapi-reviews">GET api/reviews</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reviews--id-">
                                <a href="#endpoints-GETapi-reviews--id-">GET api/reviews/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-availabilities">
                                <a href="#endpoints-POSTapi-availabilities">POST api/availabilities</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-availabilities--id-">
                                <a href="#endpoints-PUTapi-availabilities--id-">PUT api/availabilities/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-availabilities--id-">
                                <a href="#endpoints-DELETEapi-availabilities--id-">DELETE api/availabilities/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-availabilities">
                                <a href="#endpoints-GETapi-availabilities">GET api/availabilities</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-availabilities--id-">
                                <a href="#endpoints-GETapi-availabilities--id-">GET api/availabilities/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 6, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"email\": \"kunde.eloisa@example.com\",
    \"password\": \"4[*UyPJ\\\"}6\",
    \"role\": \"admin\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "email": "kunde.eloisa@example.com",
    "password": "4[*UyPJ\"}6",
    "role": "admin"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="kunde.eloisa@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>kunde.eloisa@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="4[*UyPJ"}6"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>4[*UyPJ"}6</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>role</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="role"                data-endpoint="POSTapi-register"
               value="admin"
               data-component="body">
    <br>
<p>Example: <code>admin</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>admin</code></li> <li><code>field_owner</code></li> <li><code>player</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"Z5ij-e\\/dl4m{o,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "Z5ij-e\/dl4m{o,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. The <code>email</code> of an existing record in the users table. Must not be greater than 255 characters. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="Z5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>Z5ij-e/dl4m{o,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-venues">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-venues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/venues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"governorate\": \"amniihfqcoynlazghdtqt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/venues"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "governorate": "amniihfqcoynlazghdtqt"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-venues">
</span>
<span id="execution-results-POSTapi-venues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-venues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-venues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-venues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-venues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-venues" data-method="POST"
      data-path="api/venues"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-venues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-venues"
                    onclick="tryItOut('POSTapi-venues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-venues"
                    onclick="cancelTryOut('POSTapi-venues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-venues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/venues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-venues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-venues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-venues"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>governorate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="governorate"                data-endpoint="POSTapi-venues"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-venues--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-venues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/venues/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"governorate\": \"amniihfqcoynlazghdtqt\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/venues/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "governorate": "amniihfqcoynlazghdtqt"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-venues--id-">
</span>
<span id="execution-results-PUTapi-venues--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-venues--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-venues--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-venues--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-venues--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-venues--id-" data-method="PUT"
      data-path="api/venues/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-venues--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-venues--id-"
                    onclick="tryItOut('PUTapi-venues--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-venues--id-"
                    onclick="cancelTryOut('PUTapi-venues--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-venues--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/venues/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/venues/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-venues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-venues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-venues--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the venue. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-venues--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>governorate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="governorate"                data-endpoint="PUTapi-venues--id-"
               value="amniihfqcoynlazghdtqt"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>amniihfqcoynlazghdtqt</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-venues--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-venues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/venues/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/venues/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-venues--id-">
</span>
<span id="execution-results-DELETEapi-venues--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-venues--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-venues--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-venues--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-venues--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-venues--id-" data-method="DELETE"
      data-path="api/venues/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-venues--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-venues--id-"
                    onclick="tryItOut('DELETEapi-venues--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-venues--id-"
                    onclick="cancelTryOut('DELETEapi-venues--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-venues--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/venues/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-venues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-venues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-venues--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the venue. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-venues">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-venues">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/venues" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/venues"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-venues">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Brown-Tillman&quot;,
        &quot;governorate&quot;: &quot;Arizona&quot;,
        &quot;Owner&quot;: &quot;Rogers Lebsack&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Ritchie Ltd&quot;,
        &quot;governorate&quot;: &quot;Missouri&quot;,
        &quot;Owner&quot;: &quot;Rogers Lebsack&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;VonRueden, Shanahan and Farrell&quot;,
        &quot;governorate&quot;: &quot;District of Columbia&quot;,
        &quot;Owner&quot;: &quot;Dr. Ryder Kessler Sr.&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Gorczany, Daniel and Hickle&quot;,
        &quot;governorate&quot;: &quot;Texas&quot;,
        &quot;Owner&quot;: &quot;Dr. Ryder Kessler Sr.&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;name&quot;: &quot;Will-Mayert&quot;,
        &quot;governorate&quot;: &quot;Alabama&quot;,
        &quot;Owner&quot;: &quot;Domenico Trantow&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;name&quot;: &quot;Wintheiser, Altenwerth and Bernier&quot;,
        &quot;governorate&quot;: &quot;Virginia&quot;,
        &quot;Owner&quot;: &quot;Domenico Trantow&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-venues" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-venues"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-venues"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-venues" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-venues">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-venues" data-method="GET"
      data-path="api/venues"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-venues', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-venues"
                    onclick="tryItOut('GETapi-venues');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-venues"
                    onclick="cancelTryOut('GETapi-venues');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-venues"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/venues</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-venues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-venues"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-venues--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-venues--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/venues/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/venues/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-venues--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Brown-Tillman&quot;,
    &quot;governorate&quot;: &quot;Arizona&quot;,
    &quot;Owner&quot;: &quot;Rogers Lebsack&quot;,
    &quot;courts&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;Name&quot;: &quot;praesentium 88&quot;,
            &quot;Type&quot;: &quot;padel&quot;,
            &quot;Hourly_rate&quot;: 143.81
        },
        {
            &quot;id&quot;: 2,
            &quot;Name&quot;: &quot;commodi 11&quot;,
            &quot;Type&quot;: &quot;padel&quot;,
            &quot;Hourly_rate&quot;: 69.42
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-venues--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-venues--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-venues--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-venues--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-venues--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-venues--id-" data-method="GET"
      data-path="api/venues/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-venues--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-venues--id-"
                    onclick="tryItOut('GETapi-venues--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-venues--id-"
                    onclick="cancelTryOut('GETapi-venues--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-venues--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/venues/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-venues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-venues--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-venues--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the venue. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-courts">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-courts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/courts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"padel\",
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"hourly_rate\": 11613.31890586,
    \"venue_id\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "padel",
    "name": "vmqeopfuudtdsufvyvddq",
    "hourly_rate": 11613.31890586,
    "venue_id": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-courts">
</span>
<span id="execution-results-POSTapi-courts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-courts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-courts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-courts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-courts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-courts" data-method="POST"
      data-path="api/courts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-courts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-courts"
                    onclick="tryItOut('POSTapi-courts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-courts"
                    onclick="cancelTryOut('POSTapi-courts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-courts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/courts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-courts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-courts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-courts"
               value="padel"
               data-component="body">
    <br>
<p>Example: <code>padel</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>football</code></li> <li><code>tennis</code></li> <li><code>padel</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-courts"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hourly_rate</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="hourly_rate"                data-endpoint="POSTapi-courts"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>venue_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="venue_id"                data-endpoint="POSTapi-courts"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the venues table. Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-courts--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-courts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/courts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"type\": \"football\",
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"hourly_rate\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "football",
    "name": "vmqeopfuudtdsufvyvddq",
    "hourly_rate": 11613.31890586
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-courts--id-">
</span>
<span id="execution-results-PUTapi-courts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-courts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-courts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-courts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-courts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-courts--id-" data-method="PUT"
      data-path="api/courts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-courts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-courts--id-"
                    onclick="tryItOut('PUTapi-courts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-courts--id-"
                    onclick="cancelTryOut('PUTapi-courts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-courts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/courts/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/courts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-courts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-courts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-courts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the court. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-courts--id-"
               value="football"
               data-component="body">
    <br>
<p>Example: <code>football</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>football</code></li> <li><code>tennis</code></li> <li><code>padel</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-courts--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>hourly_rate</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="hourly_rate"                data-endpoint="PUTapi-courts--id-"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>venue_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="venue_id"                data-endpoint="PUTapi-courts--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the venues table.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-courts--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-courts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/courts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-courts--id-">
</span>
<span id="execution-results-DELETEapi-courts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-courts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-courts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-courts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-courts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-courts--id-" data-method="DELETE"
      data-path="api/courts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-courts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-courts--id-"
                    onclick="tryItOut('DELETEapi-courts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-courts--id-"
                    onclick="cancelTryOut('DELETEapi-courts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-courts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/courts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-courts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-courts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-courts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the court. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-courts">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-courts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/courts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-courts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;Name&quot;: &quot;praesentium 88&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 143.81,
        &quot;Venue&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Brown-Tillman&quot;,
            &quot;governorate&quot;: &quot;Arizona&quot;,
            &quot;Owner&quot;: &quot;Rogers Lebsack&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Officia numquam et velit enim atque.&quot;
            },
            {
                &quot;rate&quot;: 4,
                &quot;comment&quot;: &quot;Aliquam ipsum officiis ex.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 2,
        &quot;Name&quot;: &quot;commodi 11&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 69.42,
        &quot;Venue&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Brown-Tillman&quot;,
            &quot;governorate&quot;: &quot;Arizona&quot;,
            &quot;Owner&quot;: &quot;Rogers Lebsack&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Eligendi magnam dolor doloribus.&quot;
            },
            {
                &quot;rate&quot;: 5,
                &quot;comment&quot;: &quot;Et possimus nulla a ut.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 3,
        &quot;Name&quot;: &quot;earum 81&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 78.69,
        &quot;Venue&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Morar and Sons&quot;,
            &quot;governorate&quot;: &quot;District of Columbia&quot;,
            &quot;Owner&quot;: &quot;Maurice Anderson&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 4,
        &quot;Name&quot;: &quot;pariatur 6&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 23.41,
        &quot;Venue&quot;: {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Stamm-Lindgren&quot;,
            &quot;governorate&quot;: &quot;Indiana&quot;,
            &quot;Owner&quot;: &quot;Mr. Leopoldo Grimes Sr.&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 5,
        &quot;Name&quot;: &quot;nisi 87&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 59.77,
        &quot;Venue&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Ritchie Ltd&quot;,
            &quot;governorate&quot;: &quot;Missouri&quot;,
            &quot;Owner&quot;: &quot;Rogers Lebsack&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 4,
                &quot;comment&quot;: &quot;Ratione doloremque repellat et mollitia et.&quot;
            },
            {
                &quot;rate&quot;: 4,
                &quot;comment&quot;: &quot;Repellendus libero aut eaque dolores qui rerum.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 6,
        &quot;Name&quot;: &quot;aperiam 17&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 107.22,
        &quot;Venue&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Ritchie Ltd&quot;,
            &quot;governorate&quot;: &quot;Missouri&quot;,
            &quot;Owner&quot;: &quot;Rogers Lebsack&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Totam quam nihil sequi necessitatibus eveniet nisi eos.&quot;
            },
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Voluptate ut saepe rerum et minima quam vel aperiam.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 7,
        &quot;Name&quot;: &quot;officiis 87&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 187.01,
        &quot;Venue&quot;: {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;Schowalter, Weimann and Funk&quot;,
            &quot;governorate&quot;: &quot;Utah&quot;,
            &quot;Owner&quot;: &quot;Cary Hackett&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 8,
        &quot;Name&quot;: &quot;a 88&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 145.62,
        &quot;Venue&quot;: {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;Miller PLC&quot;,
            &quot;governorate&quot;: &quot;Alaska&quot;,
            &quot;Owner&quot;: &quot;Ms. Cali Witting IV&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 9,
        &quot;Name&quot;: &quot;asperiores 87&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 67.93,
        &quot;Venue&quot;: {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;Nader and Sons&quot;,
            &quot;governorate&quot;: &quot;Louisiana&quot;,
            &quot;Owner&quot;: &quot;Darien Gislason&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 10,
        &quot;Name&quot;: &quot;et 74&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 120.07,
        &quot;Venue&quot;: {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;McGlynn-Fay&quot;,
            &quot;governorate&quot;: &quot;New Jersey&quot;,
            &quot;Owner&quot;: &quot;Tania Feest&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 11,
        &quot;Name&quot;: &quot;unde 33&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 92.39,
        &quot;Venue&quot;: {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Murray Group&quot;,
            &quot;governorate&quot;: &quot;Virginia&quot;,
            &quot;Owner&quot;: &quot;Miss Viviane Schmidt&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 12,
        &quot;Name&quot;: &quot;voluptatem 91&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 191.9,
        &quot;Venue&quot;: {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Gleichner Group&quot;,
            &quot;governorate&quot;: &quot;Ohio&quot;,
            &quot;Owner&quot;: &quot;Mrs. Faye Douglas V&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 13,
        &quot;Name&quot;: &quot;quae 96&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 188.79,
        &quot;Venue&quot;: {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;Herman-Wehner&quot;,
            &quot;governorate&quot;: &quot;Washington&quot;,
            &quot;Owner&quot;: &quot;Elfrieda Gleichner&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 14,
        &quot;Name&quot;: &quot;veritatis 8&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 117.85,
        &quot;Venue&quot;: {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;VonRueden, Shanahan and Farrell&quot;,
            &quot;governorate&quot;: &quot;District of Columbia&quot;,
            &quot;Owner&quot;: &quot;Dr. Ryder Kessler Sr.&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Aliquam voluptate expedita omnis qui rerum incidunt.&quot;
            },
            {
                &quot;rate&quot;: 4,
                &quot;comment&quot;: &quot;Unde rerum expedita et libero et a.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 15,
        &quot;Name&quot;: &quot;eligendi 96&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 163.28,
        &quot;Venue&quot;: {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;VonRueden, Shanahan and Farrell&quot;,
            &quot;governorate&quot;: &quot;District of Columbia&quot;,
            &quot;Owner&quot;: &quot;Dr. Ryder Kessler Sr.&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 5,
                &quot;comment&quot;: &quot;Nesciunt et ipsum minima eius.&quot;
            },
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Vel molestiae accusantium amet autem aut non.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 16,
        &quot;Name&quot;: &quot;nostrum 99&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 123.54,
        &quot;Venue&quot;: {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Upton LLC&quot;,
            &quot;governorate&quot;: &quot;West Virginia&quot;,
            &quot;Owner&quot;: &quot;Dr. Torrance Hilpert I&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 17,
        &quot;Name&quot;: &quot;qui 61&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 63.49,
        &quot;Venue&quot;: {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;Champlin, Thiel and Brekke&quot;,
            &quot;governorate&quot;: &quot;Virginia&quot;,
            &quot;Owner&quot;: &quot;Patrick Shanahan V&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 18,
        &quot;Name&quot;: &quot;eaque 2&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 132.51,
        &quot;Venue&quot;: {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;Grady-Carter&quot;,
            &quot;governorate&quot;: &quot;Rhode Island&quot;,
            &quot;Owner&quot;: &quot;Jeanne Blick&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 19,
        &quot;Name&quot;: &quot;quos 3&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 126.37,
        &quot;Venue&quot;: {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;Rice-Turcotte&quot;,
            &quot;governorate&quot;: &quot;Iowa&quot;,
            &quot;Owner&quot;: &quot;Kacey Wisoky V&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 20,
        &quot;Name&quot;: &quot;voluptas 45&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 29.01,
        &quot;Venue&quot;: {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;Little-Fisher&quot;,
            &quot;governorate&quot;: &quot;Pennsylvania&quot;,
            &quot;Owner&quot;: &quot;Katrine Wintheiser I&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 21,
        &quot;Name&quot;: &quot;dolorum 10&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 148.25,
        &quot;Venue&quot;: {
            &quot;id&quot;: 39,
            &quot;name&quot;: &quot;Beer, Kuhic and Buckridge&quot;,
            &quot;governorate&quot;: &quot;Indiana&quot;,
            &quot;Owner&quot;: &quot;Fleta O&#039;Reilly&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 22,
        &quot;Name&quot;: &quot;aut 84&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 106,
        &quot;Venue&quot;: {
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;Rosenbaum-Lynch&quot;,
            &quot;governorate&quot;: &quot;Indiana&quot;,
            &quot;Owner&quot;: &quot;Prof. Darian McCullough&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 23,
        &quot;Name&quot;: &quot;provident 85&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 153.12,
        &quot;Venue&quot;: {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;Gottlieb, Considine and Reinger&quot;,
            &quot;governorate&quot;: &quot;Idaho&quot;,
            &quot;Owner&quot;: &quot;Mason Marks&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 24,
        &quot;Name&quot;: &quot;quam 19&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 28.74,
        &quot;Venue&quot;: {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Gorczany, Daniel and Hickle&quot;,
            &quot;governorate&quot;: &quot;Texas&quot;,
            &quot;Owner&quot;: &quot;Dr. Ryder Kessler Sr.&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Qui molestiae aliquid in eum autem nostrum.&quot;
            },
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Alias aut omnis suscipit explicabo repellendus nihil cum.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 25,
        &quot;Name&quot;: &quot;aut 88&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 166.86,
        &quot;Venue&quot;: {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Gorczany, Daniel and Hickle&quot;,
            &quot;governorate&quot;: &quot;Texas&quot;,
            &quot;Owner&quot;: &quot;Dr. Ryder Kessler Sr.&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 1,
                &quot;comment&quot;: &quot;Possimus et et mollitia ut accusamus molestiae.&quot;
            },
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Accusantium voluptas eligendi laboriosam consequatur quo.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 26,
        &quot;Name&quot;: &quot;cumque 9&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 25.64,
        &quot;Venue&quot;: {
            &quot;id&quot;: 44,
            &quot;name&quot;: &quot;Hoppe Group&quot;,
            &quot;governorate&quot;: &quot;Delaware&quot;,
            &quot;Owner&quot;: &quot;Laurence Mante&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 27,
        &quot;Name&quot;: &quot;at 82&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 105.19,
        &quot;Venue&quot;: {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;Mayer-Rempel&quot;,
            &quot;governorate&quot;: &quot;Tennessee&quot;,
            &quot;Owner&quot;: &quot;Valentin Torp&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 28,
        &quot;Name&quot;: &quot;architecto 6&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 192.98,
        &quot;Venue&quot;: {
            &quot;id&quot;: 47,
            &quot;name&quot;: &quot;Gutkowski Inc&quot;,
            &quot;governorate&quot;: &quot;North Carolina&quot;,
            &quot;Owner&quot;: &quot;Evert Predovic&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 29,
        &quot;Name&quot;: &quot;neque 85&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 70.04,
        &quot;Venue&quot;: {
            &quot;id&quot;: 51,
            &quot;name&quot;: &quot;Erdman, Cole and O&#039;Reilly&quot;,
            &quot;governorate&quot;: &quot;New Mexico&quot;,
            &quot;Owner&quot;: &quot;Mertie Hoppe&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 30,
        &quot;Name&quot;: &quot;nobis 95&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 37.26,
        &quot;Venue&quot;: {
            &quot;id&quot;: 52,
            &quot;name&quot;: &quot;Bins-Abshire&quot;,
            &quot;governorate&quot;: &quot;Florida&quot;,
            &quot;Owner&quot;: &quot;Violette Thompson&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 31,
        &quot;Name&quot;: &quot;quae 43&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 117.63,
        &quot;Venue&quot;: {
            &quot;id&quot;: 55,
            &quot;name&quot;: &quot;Funk-Gutmann&quot;,
            &quot;governorate&quot;: &quot;Kansas&quot;,
            &quot;Owner&quot;: &quot;Prof. Harley Miller&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 32,
        &quot;Name&quot;: &quot;odio 77&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 184.74,
        &quot;Venue&quot;: {
            &quot;id&quot;: 56,
            &quot;name&quot;: &quot;Champlin-Stracke&quot;,
            &quot;governorate&quot;: &quot;Colorado&quot;,
            &quot;Owner&quot;: &quot;Anya Mueller&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 33,
        &quot;Name&quot;: &quot;ut 45&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 121.62,
        &quot;Venue&quot;: {
            &quot;id&quot;: 57,
            &quot;name&quot;: &quot;Will-Mayert&quot;,
            &quot;governorate&quot;: &quot;Alabama&quot;,
            &quot;Owner&quot;: &quot;Domenico Trantow&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Sed praesentium autem in esse in ut.&quot;
            },
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Ea quod officiis accusamus quis.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 34,
        &quot;Name&quot;: &quot;numquam 61&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 140.1,
        &quot;Venue&quot;: {
            &quot;id&quot;: 57,
            &quot;name&quot;: &quot;Will-Mayert&quot;,
            &quot;governorate&quot;: &quot;Alabama&quot;,
            &quot;Owner&quot;: &quot;Domenico Trantow&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Libero porro alias aliquam pariatur.&quot;
            },
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Molestiae sapiente eum eveniet cupiditate.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 35,
        &quot;Name&quot;: &quot;dolorem 19&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 44.91,
        &quot;Venue&quot;: {
            &quot;id&quot;: 60,
            &quot;name&quot;: &quot;Parker-Quigley&quot;,
            &quot;governorate&quot;: &quot;District of Columbia&quot;,
            &quot;Owner&quot;: &quot;Victoria Jones&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 36,
        &quot;Name&quot;: &quot;dolores 43&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 98.24,
        &quot;Venue&quot;: {
            &quot;id&quot;: 61,
            &quot;name&quot;: &quot;Steuber, Bahringer and Konopelski&quot;,
            &quot;governorate&quot;: &quot;Michigan&quot;,
            &quot;Owner&quot;: &quot;Miss Ernestina Deckow DDS&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 37,
        &quot;Name&quot;: &quot;incidunt 98&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 100.24,
        &quot;Venue&quot;: {
            &quot;id&quot;: 69,
            &quot;name&quot;: &quot;Fadel-Goodwin&quot;,
            &quot;governorate&quot;: &quot;Missouri&quot;,
            &quot;Owner&quot;: &quot;Mrs. Trisha Pfeffer&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 38,
        &quot;Name&quot;: &quot;sapiente 2&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 48.37,
        &quot;Venue&quot;: {
            &quot;id&quot;: 70,
            &quot;name&quot;: &quot;Wehner, Reinger and Ernser&quot;,
            &quot;governorate&quot;: &quot;Nevada&quot;,
            &quot;Owner&quot;: &quot;Brenda Grimes&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 39,
        &quot;Name&quot;: &quot;et 43&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 62.22,
        &quot;Venue&quot;: {
            &quot;id&quot;: 71,
            &quot;name&quot;: &quot;Rodriguez and Sons&quot;,
            &quot;governorate&quot;: &quot;West Virginia&quot;,
            &quot;Owner&quot;: &quot;Mr. Hester Prohaska III&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 40,
        &quot;Name&quot;: &quot;ea 3&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 51.72,
        &quot;Venue&quot;: {
            &quot;id&quot;: 58,
            &quot;name&quot;: &quot;Wintheiser, Altenwerth and Bernier&quot;,
            &quot;governorate&quot;: &quot;Virginia&quot;,
            &quot;Owner&quot;: &quot;Domenico Trantow&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Distinctio tempora eius voluptas fuga.&quot;
            },
            {
                &quot;rate&quot;: 1,
                &quot;comment&quot;: &quot;Alias sequi eos unde excepturi ut sapiente.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 41,
        &quot;Name&quot;: &quot;similique 12&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 49.51,
        &quot;Venue&quot;: {
            &quot;id&quot;: 58,
            &quot;name&quot;: &quot;Wintheiser, Altenwerth and Bernier&quot;,
            &quot;governorate&quot;: &quot;Virginia&quot;,
            &quot;Owner&quot;: &quot;Domenico Trantow&quot;
        },
        &quot;Reviews&quot;: [
            {
                &quot;rate&quot;: 2,
                &quot;comment&quot;: &quot;Illum eum ea atque culpa autem voluptas aut.&quot;
            },
            {
                &quot;rate&quot;: 3,
                &quot;comment&quot;: &quot;Iure voluptatibus nobis dignissimos qui debitis quam vel.&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 42,
        &quot;Name&quot;: &quot;sint 74&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 194.08,
        &quot;Venue&quot;: {
            &quot;id&quot;: 72,
            &quot;name&quot;: &quot;Block, Jerde and Kertzmann&quot;,
            &quot;governorate&quot;: &quot;California&quot;,
            &quot;Owner&quot;: &quot;Miss Myrtis Welch&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 43,
        &quot;Name&quot;: &quot;ex 1&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 146.39,
        &quot;Venue&quot;: {
            &quot;id&quot;: 73,
            &quot;name&quot;: &quot;Lang LLC&quot;,
            &quot;governorate&quot;: &quot;Kentucky&quot;,
            &quot;Owner&quot;: &quot;Kaleb Beer&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 44,
        &quot;Name&quot;: &quot;dolor 16&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 66.18,
        &quot;Venue&quot;: {
            &quot;id&quot;: 74,
            &quot;name&quot;: &quot;Pfannerstill LLC&quot;,
            &quot;governorate&quot;: &quot;Wyoming&quot;,
            &quot;Owner&quot;: &quot;Hazel Johnson&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 45,
        &quot;Name&quot;: &quot;impedit 45&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 99.12,
        &quot;Venue&quot;: {
            &quot;id&quot;: 77,
            &quot;name&quot;: &quot;Prohaska-Balistreri&quot;,
            &quot;governorate&quot;: &quot;Florida&quot;,
            &quot;Owner&quot;: &quot;Enoch Padberg&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 46,
        &quot;Name&quot;: &quot;eveniet 66&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 42.53,
        &quot;Venue&quot;: {
            &quot;id&quot;: 78,
            &quot;name&quot;: &quot;Bechtelar PLC&quot;,
            &quot;governorate&quot;: &quot;Alaska&quot;,
            &quot;Owner&quot;: &quot;Dr. Imani Gorczany&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 47,
        &quot;Name&quot;: &quot;quia 22&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 131.07,
        &quot;Venue&quot;: {
            &quot;id&quot;: 79,
            &quot;name&quot;: &quot;Wilderman LLC&quot;,
            &quot;governorate&quot;: &quot;Georgia&quot;,
            &quot;Owner&quot;: &quot;Miss Kelsi Mann V&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 48,
        &quot;Name&quot;: &quot;enim 13&quot;,
        &quot;Type&quot;: &quot;tennis&quot;,
        &quot;Hourly_rate&quot;: 104.15,
        &quot;Venue&quot;: {
            &quot;id&quot;: 81,
            &quot;name&quot;: &quot;Durgan-Gutmann&quot;,
            &quot;governorate&quot;: &quot;Pennsylvania&quot;,
            &quot;Owner&quot;: &quot;Celine Reichel&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 49,
        &quot;Name&quot;: &quot;harum 26&quot;,
        &quot;Type&quot;: &quot;padel&quot;,
        &quot;Hourly_rate&quot;: 191.08,
        &quot;Venue&quot;: {
            &quot;id&quot;: 84,
            &quot;name&quot;: &quot;DuBuque-Shields&quot;,
            &quot;governorate&quot;: &quot;Maine&quot;,
            &quot;Owner&quot;: &quot;Elena Walter&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 50,
        &quot;Name&quot;: &quot;Khomasy&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 150,
        &quot;Venue&quot;: {
            &quot;id&quot;: 87,
            &quot;name&quot;: &quot;Wonen Padel Court&quot;,
            &quot;governorate&quot;: &quot;Zagazig&quot;,
            &quot;Owner&quot;: &quot;Mohamed Alaa&quot;
        },
        &quot;Reviews&quot;: []
    },
    {
        &quot;id&quot;: 51,
        &quot;Name&quot;: &quot;Khomasy&quot;,
        &quot;Type&quot;: &quot;football&quot;,
        &quot;Hourly_rate&quot;: 190,
        &quot;Venue&quot;: {
            &quot;id&quot;: 87,
            &quot;name&quot;: &quot;Wonen Padel Court&quot;,
            &quot;governorate&quot;: &quot;Zagazig&quot;,
            &quot;Owner&quot;: &quot;Mohamed Alaa&quot;
        },
        &quot;Reviews&quot;: []
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courts" data-method="GET"
      data-path="api/courts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courts"
                    onclick="tryItOut('GETapi-courts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courts"
                    onclick="cancelTryOut('GETapi-courts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-courts--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-courts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/courts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/courts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-courts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;Name&quot;: &quot;praesentium 88&quot;,
    &quot;Type&quot;: &quot;padel&quot;,
    &quot;Hourly_rate&quot;: 143.81
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-courts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-courts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-courts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-courts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-courts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-courts--id-" data-method="GET"
      data-path="api/courts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-courts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-courts--id-"
                    onclick="tryItOut('GETapi-courts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-courts--id-"
                    onclick="cancelTryOut('GETapi-courts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-courts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/courts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-courts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-courts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-courts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the court. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-bookings">GET api/bookings</h2>

<p>
</p>



<span id="example-requests-GETapi-bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bookings">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bookings" data-method="GET"
      data-path="api/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bookings"
                    onclick="tryItOut('GETapi-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bookings"
                    onclick="cancelTryOut('GETapi-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bookings">POST api/bookings</h2>

<p>
</p>



<span id="example-requests-POSTapi-bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"court_id\": \"consequatur\",
    \"date\": \"2107-03-08\",
    \"start_time\": \"consequatur\",
    \"end_time\": \"consequatur\",
    \"status\": \"cancelled\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "court_id": "consequatur",
    "date": "2107-03-08",
    "start_time": "consequatur",
    "end_time": "consequatur",
    "status": "cancelled"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bookings">
</span>
<span id="execution-results-POSTapi-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bookings" data-method="POST"
      data-path="api/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bookings"
                    onclick="tryItOut('POSTapi-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bookings"
                    onclick="cancelTryOut('POSTapi-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>court_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="court_id"                data-endpoint="POSTapi-bookings"
               value="consequatur"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the courts table. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date"                data-endpoint="POSTapi-bookings"
               value="2107-03-08"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>today</code>. Example: <code>2107-03-08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-bookings"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-bookings"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-bookings"
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bookings--id-">GET api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/bookings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bookings--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bookings--id-" data-method="GET"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bookings--id-"
                    onclick="tryItOut('GETapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bookings--id-"
                    onclick="cancelTryOut('GETapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-bookings--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-bookings--id-">PUT api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/bookings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"cancelled\",
    \"date\": \"2026-02-06T19:04:35\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "cancelled",
    "date": "2026-02-06T19:04:35"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-bookings--id-">
</span>
<span id="execution-results-PUTapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-bookings--id-" data-method="PUT"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-bookings--id-"
                    onclick="tryItOut('PUTapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-bookings--id-"
                    onclick="cancelTryOut('PUTapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-bookings--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-bookings--id-"
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="PUTapi-bookings--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-bookings--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date"                data-endpoint="PUTapi-bookings--id-"
               value="2026-02-06T19:04:35"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-02-06T19:04:35</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-bookings--id-">DELETE api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/bookings/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-bookings--id-">
</span>
<span id="execution-results-DELETEapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-bookings--id-" data-method="DELETE"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-bookings--id-"
                    onclick="tryItOut('DELETEapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-bookings--id-"
                    onclick="cancelTryOut('DELETEapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-bookings--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-bookings--booking_id--confirm">POST api/bookings/{booking_id}/confirm</h2>

<p>
</p>



<span id="example-requests-POSTapi-bookings--booking_id--confirm">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/bookings/1/confirm" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/bookings/1/confirm"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bookings--booking_id--confirm">
</span>
<span id="execution-results-POSTapi-bookings--booking_id--confirm" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bookings--booking_id--confirm"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bookings--booking_id--confirm"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bookings--booking_id--confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bookings--booking_id--confirm">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bookings--booking_id--confirm" data-method="POST"
      data-path="api/bookings/{booking_id}/confirm"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bookings--booking_id--confirm', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bookings--booking_id--confirm"
                    onclick="tryItOut('POSTapi-bookings--booking_id--confirm');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bookings--booking_id--confirm"
                    onclick="cancelTryOut('POSTapi-bookings--booking_id--confirm');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bookings--booking_id--confirm"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bookings/{booking_id}/confirm</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bookings--booking_id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bookings--booking_id--confirm"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="booking_id"                data-endpoint="POSTapi-bookings--booking_id--confirm"
               value="1"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-reviews">POST api/reviews</h2>

<p>
</p>



<span id="example-requests-POSTapi-reviews">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/reviews" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"comment\": \"consequatur\",
    \"rating\": 3,
    \"reviewable_id\": \"consequatur\",
    \"reviewable_type\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reviews"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "consequatur",
    "rating": 3,
    "reviewable_id": "consequatur",
    "reviewable_type": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reviews">
</span>
<span id="execution-results-POSTapi-reviews" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reviews"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reviews"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reviews" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reviews">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-reviews" data-method="POST"
      data-path="api/reviews"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reviews', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reviews"
                    onclick="tryItOut('POSTapi-reviews');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reviews"
                    onclick="cancelTryOut('POSTapi-reviews');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reviews"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reviews</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comment</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="comment"                data-endpoint="POSTapi-reviews"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rating"                data-endpoint="POSTapi-reviews"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 5. Example: <code>3</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reviewable_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reviewable_id"                data-endpoint="POSTapi-reviews"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>reviewable_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="reviewable_type"                data-endpoint="POSTapi-reviews"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-reviews--id-">PUT api/reviews/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-reviews--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/reviews/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"comment\": \"consequatur\",
    \"rating\": 3
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reviews/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "comment": "consequatur",
    "rating": 3
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-reviews--id-">
</span>
<span id="execution-results-PUTapi-reviews--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-reviews--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-reviews--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-reviews--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-reviews--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-reviews--id-" data-method="PUT"
      data-path="api/reviews/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-reviews--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-reviews--id-"
                    onclick="tryItOut('PUTapi-reviews--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-reviews--id-"
                    onclick="cancelTryOut('PUTapi-reviews--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-reviews--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/reviews/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/reviews/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-reviews--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the review. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comment</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="comment"                data-endpoint="PUTapi-reviews--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>rating</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="rating"                data-endpoint="PUTapi-reviews--id-"
               value="3"
               data-component="body">
    <br>
<p>Must be at least 1. Must not be greater than 5. Example: <code>3</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-reviews--id-">DELETE api/reviews/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-reviews--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/reviews/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reviews/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-reviews--id-">
</span>
<span id="execution-results-DELETEapi-reviews--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-reviews--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-reviews--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-reviews--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-reviews--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-reviews--id-" data-method="DELETE"
      data-path="api/reviews/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-reviews--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-reviews--id-"
                    onclick="tryItOut('DELETEapi-reviews--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-reviews--id-"
                    onclick="cancelTryOut('DELETEapi-reviews--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-reviews--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/reviews/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-reviews--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the review. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-reviews">GET api/reviews</h2>

<p>
</p>



<span id="example-requests-GETapi-reviews">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/reviews" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reviews"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reviews">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Officia numquam et velit enim atque.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Brielle Fritsch&quot;
        }
    },
    {
        &quot;rate&quot;: 4,
        &quot;comment&quot;: &quot;Aliquam ipsum officiis ex.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Raphael Kiehn&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Eligendi magnam dolor doloribus.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;Barbara Doyle MD&quot;
        }
    },
    {
        &quot;rate&quot;: 5,
        &quot;comment&quot;: &quot;Et possimus nulla a ut.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;Prof. Rogelio Kassulke&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Est voluptatem accusamus vitae minima.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Kayla Toy DVM&quot;
        }
    },
    {
        &quot;rate&quot;: 4,
        &quot;comment&quot;: &quot;Ratione doloremque repellat et mollitia et.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Ms. Anne Wuckert&quot;
        }
    },
    {
        &quot;rate&quot;: 4,
        &quot;comment&quot;: &quot;Repellendus libero aut eaque dolores qui rerum.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Brycen Gleichner&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Totam quam nihil sequi necessitatibus eveniet nisi eos.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;Ms. Leila Howe DVM&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Voluptate ut saepe rerum et minima quam vel aperiam.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;Louie Schoen&quot;
        }
    },
    {
        &quot;rate&quot;: 4,
        &quot;comment&quot;: &quot;Enim facere eos quia nihil omnis modi.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;Elmer Koelpin&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Aliquam voluptate expedita omnis qui rerum incidunt.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;Ms. Genesis Fadel MD&quot;
        }
    },
    {
        &quot;rate&quot;: 4,
        &quot;comment&quot;: &quot;Unde rerum expedita et libero et a.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 47,
            &quot;name&quot;: &quot;Lora Haley DVM&quot;
        }
    },
    {
        &quot;rate&quot;: 5,
        &quot;comment&quot;: &quot;Nesciunt et ipsum minima eius.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 52,
            &quot;name&quot;: &quot;Arne Little&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Vel molestiae accusantium amet autem aut non.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 54,
            &quot;name&quot;: &quot;Prof. Alaina Stracke MD&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Id illo corrupti vel repellat et.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 58,
            &quot;name&quot;: &quot;Raquel Cremin III&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Qui molestiae aliquid in eum autem nostrum.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 63,
            &quot;name&quot;: &quot;Cristian Stamm&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Alias aut omnis suscipit explicabo repellendus nihil cum.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 65,
            &quot;name&quot;: &quot;Ms. Effie Ziemann&quot;
        }
    },
    {
        &quot;rate&quot;: 1,
        &quot;comment&quot;: &quot;Possimus et et mollitia ut accusamus molestiae.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 70,
            &quot;name&quot;: &quot;Joe Batz&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Accusantium voluptas eligendi laboriosam consequatur quo.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 72,
            &quot;name&quot;: &quot;Tyrell Mosciski&quot;
        }
    },
    {
        &quot;rate&quot;: 1,
        &quot;comment&quot;: &quot;Laborum ab nihil inventore.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 76,
            &quot;name&quot;: &quot;Evans Blick&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Sed praesentium autem in esse in ut.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 81,
            &quot;name&quot;: &quot;Alberto Rempel&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Ea quod officiis accusamus quis.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 83,
            &quot;name&quot;: &quot;Prince Rodriguez DVM&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Libero porro alias aliquam pariatur.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 88,
            &quot;name&quot;: &quot;Prof. Jovany Johnston&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Molestiae sapiente eum eveniet cupiditate.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 90,
            &quot;name&quot;: &quot;Francesco Borer DVM&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Nihil ut consequatur omnis.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 94,
            &quot;name&quot;: &quot;Lysanne Ziemann&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Distinctio tempora eius voluptas fuga.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 99,
            &quot;name&quot;: &quot;Norma Friesen&quot;
        }
    },
    {
        &quot;rate&quot;: 1,
        &quot;comment&quot;: &quot;Alias sequi eos unde excepturi ut sapiente.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 101,
            &quot;name&quot;: &quot;Dr. Geraldine Mann&quot;
        }
    },
    {
        &quot;rate&quot;: 2,
        &quot;comment&quot;: &quot;Illum eum ea atque culpa autem voluptas aut.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 106,
            &quot;name&quot;: &quot;Miss Lavonne Hane Jr.&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Iure voluptatibus nobis dignissimos qui debitis quam vel.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 108,
            &quot;name&quot;: &quot;Cielo Romaguera&quot;
        }
    },
    {
        &quot;rate&quot;: 3,
        &quot;comment&quot;: &quot;Veritatis atque quis ipsa earum aut veniam quis.&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: 112,
            &quot;name&quot;: &quot;Kelli Moore III&quot;
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reviews" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reviews"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reviews"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reviews" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reviews">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reviews" data-method="GET"
      data-path="api/reviews"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reviews', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reviews"
                    onclick="tryItOut('GETapi-reviews');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reviews"
                    onclick="cancelTryOut('GETapi-reviews');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reviews"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reviews</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reviews"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-reviews--id-">GET api/reviews/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-reviews--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/reviews/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reviews/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reviews--id-">
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;This action is unauthorized.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reviews--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reviews--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reviews--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reviews--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reviews--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reviews--id-" data-method="GET"
      data-path="api/reviews/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reviews--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reviews--id-"
                    onclick="tryItOut('GETapi-reviews--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reviews--id-"
                    onclick="cancelTryOut('GETapi-reviews--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reviews--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reviews/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reviews--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-reviews--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the review. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-availabilities">POST api/availabilities</h2>

<p>
</p>



<span id="example-requests-POSTapi-availabilities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/availabilities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"day\": \"consequatur\",
    \"start_time\": \"consequatur\",
    \"end_time\": \"consequatur\",
    \"is_closed\": false,
    \"availableable_id\": \"consequatur\",
    \"availableable_type\": \"consequatur\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/availabilities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "day": "consequatur",
    "start_time": "consequatur",
    "end_time": "consequatur",
    "is_closed": false,
    "availableable_id": "consequatur",
    "availableable_type": "consequatur"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-availabilities">
</span>
<span id="execution-results-POSTapi-availabilities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-availabilities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-availabilities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-availabilities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-availabilities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-availabilities" data-method="POST"
      data-path="api/availabilities"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-availabilities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-availabilities"
                    onclick="tryItOut('POSTapi-availabilities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-availabilities"
                    onclick="cancelTryOut('POSTapi-availabilities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-availabilities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/availabilities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-availabilities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-availabilities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="day"                data-endpoint="POSTapi-availabilities"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-availabilities"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-availabilities"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_closed</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-availabilities" style="display: none">
            <input type="radio" name="is_closed"
                   value="true"
                   data-endpoint="POSTapi-availabilities"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-availabilities" style="display: none">
            <input type="radio" name="is_closed"
                   value="false"
                   data-endpoint="POSTapi-availabilities"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>availableable_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="availableable_id"                data-endpoint="POSTapi-availabilities"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>availableable_type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="availableable_type"                data-endpoint="POSTapi-availabilities"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-availabilities--id-">PUT api/availabilities/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-availabilities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/availabilities/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"day\": \"consequatur\",
    \"is_closed\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/availabilities/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "day": "consequatur",
    "is_closed": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-availabilities--id-">
</span>
<span id="execution-results-PUTapi-availabilities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-availabilities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-availabilities--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-availabilities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-availabilities--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-availabilities--id-" data-method="PUT"
      data-path="api/availabilities/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-availabilities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-availabilities--id-"
                    onclick="tryItOut('PUTapi-availabilities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-availabilities--id-"
                    onclick="cancelTryOut('PUTapi-availabilities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-availabilities--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/availabilities/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/availabilities/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-availabilities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-availabilities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-availabilities--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the availability. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="day"                data-endpoint="PUTapi-availabilities--id-"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="PUTapi-availabilities--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-availabilities--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_closed</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-availabilities--id-" style="display: none">
            <input type="radio" name="is_closed"
                   value="true"
                   data-endpoint="PUTapi-availabilities--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-availabilities--id-" style="display: none">
            <input type="radio" name="is_closed"
                   value="false"
                   data-endpoint="PUTapi-availabilities--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-availabilities--id-">DELETE api/availabilities/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-availabilities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/availabilities/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/availabilities/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-availabilities--id-">
</span>
<span id="execution-results-DELETEapi-availabilities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-availabilities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-availabilities--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-availabilities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-availabilities--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-availabilities--id-" data-method="DELETE"
      data-path="api/availabilities/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-availabilities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-availabilities--id-"
                    onclick="tryItOut('DELETEapi-availabilities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-availabilities--id-"
                    onclick="cancelTryOut('DELETEapi-availabilities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-availabilities--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/availabilities/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-availabilities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-availabilities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-availabilities--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the availability. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-availabilities">GET api/availabilities</h2>

<p>
</p>



<span id="example-requests-GETapi-availabilities">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/availabilities" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/availabilities"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-availabilities">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;09:36:13&quot;,
        &quot;end_time&quot;: &quot;11:36:13&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;10:54:02&quot;,
        &quot;end_time&quot;: &quot;12:54:02&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;day&quot;: &quot;Monday&quot;,
        &quot;start_time&quot;: &quot;15:03:04&quot;,
        &quot;end_time&quot;: &quot;17:03:04&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;04:13:26&quot;,
        &quot;end_time&quot;: &quot;06:13:26&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;day&quot;: &quot;Monday&quot;,
        &quot;start_time&quot;: &quot;11:29:34&quot;,
        &quot;end_time&quot;: &quot;13:29:34&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;20:57:10&quot;,
        &quot;end_time&quot;: &quot;22:57:10&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;13:32:33&quot;,
        &quot;end_time&quot;: &quot;15:32:33&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;09:23:23&quot;,
        &quot;end_time&quot;: &quot;11:23:23&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;08:24:39&quot;,
        &quot;end_time&quot;: &quot;10:24:39&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;05:02:38&quot;,
        &quot;end_time&quot;: &quot;07:02:38&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;day&quot;: &quot;Saturday&quot;,
        &quot;start_time&quot;: &quot;13:34:56&quot;,
        &quot;end_time&quot;: &quot;15:34:56&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;14:28:37&quot;,
        &quot;end_time&quot;: &quot;16:28:37&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;day&quot;: &quot;Monday&quot;,
        &quot;start_time&quot;: &quot;02:29:30&quot;,
        &quot;end_time&quot;: &quot;04:29:30&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;13:03:39&quot;,
        &quot;end_time&quot;: &quot;15:03:39&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;05:27:59&quot;,
        &quot;end_time&quot;: &quot;07:27:59&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;06:23:55&quot;,
        &quot;end_time&quot;: &quot;08:23:55&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;12:56:12&quot;,
        &quot;end_time&quot;: &quot;14:56:12&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;12:50:16&quot;,
        &quot;end_time&quot;: &quot;14:50:16&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;10:23:47&quot;,
        &quot;end_time&quot;: &quot;12:23:47&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;12:34:37&quot;,
        &quot;end_time&quot;: &quot;14:34:37&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;10:58:26&quot;,
        &quot;end_time&quot;: &quot;12:58:26&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;03:31:48&quot;,
        &quot;end_time&quot;: &quot;05:31:48&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;18:08:44&quot;,
        &quot;end_time&quot;: &quot;20:08:44&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;19:07:49&quot;,
        &quot;end_time&quot;: &quot;21:07:49&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;08:25:36&quot;,
        &quot;end_time&quot;: &quot;10:25:36&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;day&quot;: &quot;Monday&quot;,
        &quot;start_time&quot;: &quot;14:34:09&quot;,
        &quot;end_time&quot;: &quot;16:34:09&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;20:06:29&quot;,
        &quot;end_time&quot;: &quot;22:06:29&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;02:49:04&quot;,
        &quot;end_time&quot;: &quot;04:49:04&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;19:09:32&quot;,
        &quot;end_time&quot;: &quot;21:09:32&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;13:47:44&quot;,
        &quot;end_time&quot;: &quot;15:47:44&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;14:48:13&quot;,
        &quot;end_time&quot;: &quot;16:48:13&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;day&quot;: &quot;Saturday&quot;,
        &quot;start_time&quot;: &quot;15:37:23&quot;,
        &quot;end_time&quot;: &quot;17:37:23&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;20:09:45&quot;,
        &quot;end_time&quot;: &quot;22:09:45&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;13:56:44&quot;,
        &quot;end_time&quot;: &quot;15:56:44&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;15:07:46&quot;,
        &quot;end_time&quot;: &quot;17:07:46&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;07:15:00&quot;,
        &quot;end_time&quot;: &quot;09:15:00&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;day&quot;: &quot;Saturday&quot;,
        &quot;start_time&quot;: &quot;08:30:12&quot;,
        &quot;end_time&quot;: &quot;10:30:12&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;07:20:23&quot;,
        &quot;end_time&quot;: &quot;09:20:23&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;day&quot;: &quot;Saturday&quot;,
        &quot;start_time&quot;: &quot;06:05:06&quot;,
        &quot;end_time&quot;: &quot;08:05:06&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;day&quot;: &quot;Tuesday&quot;,
        &quot;start_time&quot;: &quot;13:38:46&quot;,
        &quot;end_time&quot;: &quot;15:38:46&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;11:10:13&quot;,
        &quot;end_time&quot;: &quot;13:10:13&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;03:50:48&quot;,
        &quot;end_time&quot;: &quot;05:50:48&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;03:58:00&quot;,
        &quot;end_time&quot;: &quot;05:58:00&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;21:48:48&quot;,
        &quot;end_time&quot;: &quot;23:48:48&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;02:17:13&quot;,
        &quot;end_time&quot;: &quot;04:17:13&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;day&quot;: &quot;Wednesday&quot;,
        &quot;start_time&quot;: &quot;21:13:57&quot;,
        &quot;end_time&quot;: &quot;23:13:57&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;day&quot;: &quot;Thursday&quot;,
        &quot;start_time&quot;: &quot;07:33:17&quot;,
        &quot;end_time&quot;: &quot;09:33:17&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;day&quot;: &quot;Friday&quot;,
        &quot;start_time&quot;: &quot;01:20:02&quot;,
        &quot;end_time&quot;: &quot;03:20:02&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;10:36:56&quot;,
        &quot;end_time&quot;: &quot;12:00:00&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;10:00:00&quot;,
        &quot;end_time&quot;: &quot;14:00:00&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;07:00:00&quot;,
        &quot;end_time&quot;: &quot;14:00:00&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;day&quot;: &quot;Sunday&quot;,
        &quot;start_time&quot;: &quot;07:00:00&quot;,
        &quot;end_time&quot;: &quot;14:00:00&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-availabilities" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-availabilities"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-availabilities"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-availabilities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-availabilities">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-availabilities" data-method="GET"
      data-path="api/availabilities"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-availabilities', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-availabilities"
                    onclick="tryItOut('GETapi-availabilities');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-availabilities"
                    onclick="cancelTryOut('GETapi-availabilities');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-availabilities"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/availabilities</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-availabilities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-availabilities"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-availabilities--id-">GET api/availabilities/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-availabilities--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/availabilities/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/availabilities/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-availabilities--id-">
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;This action is unauthorized.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-availabilities--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-availabilities--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-availabilities--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-availabilities--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-availabilities--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-availabilities--id-" data-method="GET"
      data-path="api/availabilities/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-availabilities--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-availabilities--id-"
                    onclick="tryItOut('GETapi-availabilities--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-availabilities--id-"
                    onclick="cancelTryOut('GETapi-availabilities--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-availabilities--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/availabilities/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-availabilities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-availabilities--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-availabilities--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the availability. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
