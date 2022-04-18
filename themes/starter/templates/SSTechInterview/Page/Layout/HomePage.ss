<div class="page page--home">
    <h1 class="page__title">$Title</h1>
    <%-- Image Block --%>
    <div class="image-block">
        <div class="image-block__content">$Content</div>
        <img class="image-block__image" src="$resourceURL('themes/starter/dist/images/kitten.jpg')" alt="kitten" />
    </div>

    <%-- Gallery block --%>
    <h2>Gallery images</h2>
    <div class="gallery">
        <% loop $getGalleryImages %>
            <img src="$Url" alt="$Title" class="gallery__image" />
        <% end_loop %>
    </p>
</div>
<% if $Form %>
    $Form
<% end_if %>
