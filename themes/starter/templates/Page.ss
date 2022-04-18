<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        $MetaTags(false)

        <% require themedCSS("dist/app") %>

        <title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> :: $SiteConfig.Title</title>
    </head>
    <body data-pagetype="$ClassName.ShortName">
        <div id="app" class="app">
            <% include Header %>

            <main class="container">
                $Layout
            </main>

            <% include Footer %>
        </div>
        $CandidateSubmissionForm
        <% require themedJavascript("dist/app") %>
    </body>
</html>
