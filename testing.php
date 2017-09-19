<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#00796b">
    <title>    Posts - Plus Two Notes
</title>
    <link rel="shortcut icon" sizes="16x16 32x32" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicons/favicon-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/img/favicons/favicon-57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicons/favicon-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicons/favicon-114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicons/favicon-144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicons/favicon-152.png">
    <meta name="application-name" content="Plus Two Notes">
    <meta name="msapplication-TileImage" content=/img/favicons/favicon-144.png">
    <meta name="msapplication-TileColor" content="#B0BEC5">
    <meta name="_token" content="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
            <!-- Only showing JWT token when the user is logged in -->
        <meta name="_jwt_token" content="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL3BsdXN0d29ub3Rlcy5jb21cL3VzZXJzXC9wb3N0cyIsImlhdCI6MTQ4OTI5MzYxOCwiZXhwIjoxNDg5Mjk3MjE4LCJuYmYiOjE0ODkyOTM2MTgsImp0aSI6IjExOWIxZjAxNjMxODM4M2EzZWE2YTYyNmZkNzNiZDE0In0.-1OZMfBganqvFkdy_YJwubjYGZsMx93nMGPpLlwRwJc">
        <link rel="stylesheet" href="stylee.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="/build/js/preload-app-824366af90.js"></script>
    <style>
        .scroll-reveal .reveal {
            visibility: hidden;
        }
    </style>

    </head>
<body>
    
    <div class="app-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">
            <a href="http://plustwonotes.com" class="text--decoration-none">
                <h1 class="header-logo">Plus Two Notes <small>HSEB Notes and Syllabus</small></h1>
            </a>
        </span>
        <div class="mdl-layout-spacer"></div>

        <div class="app-navigation">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                <label class="mdl-button mdl-js-button mdl-button--icon"
                       for="fixed-header-drawer-exp">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <form method="GET" action="http://plustwonotes.com/search" accept-charset="UTF-8">
                        <input class="mdl-textfield__input" type="text" name="q"
                           id="fixed-header-drawer-exp" />
                    </form>
                </div>
            </div>

            <div class="avatar__container">
                                    <button id="avatar-menu-button" class="avatar__menu-button mdl-button mdl-js-button mdl-button--icon">
                        <img src="/img/empty_avatar_small.jpg" alt="" class="avatar--img-tiny img--circular" />
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect avatar-menu"
                        data-mdl-for="avatar-menu-button">
                            <li class="mdl-menu__item avatar-menu__item"><a href="http://plustwonotes.com/@amriterry"><b>Amrit Twanabasu</b></a></li>
                            <li class="mdl-menu__item avatar-menu__item"><a href="http://plustwonotes.com/users/amriterry/edit">Edit your profile</a></li>
                            <li>
                                <form action="http://plustwonotes.com/logout" method="POST">
                                    <input type="hidden" name="_token" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
                                    <button type="submit" style="width: 100%;" class="mdl-menu__item avatar-menu__item">
                                        Log Out
                                    </button>
                                </form>
                            </li>
                    </ul>
                            </div>
        </div>
    </div>
</header>

<div class="mdl-layout__drawer">
    <span class="mdl-layout-title text--thin">Plus Two Notes</span>
    <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="http://plustwonotes.com">
        <i class="material-icons">home</i> Home
    </a>

            <a href="http://plustwonotes.com/notes" class="mdl-navigation__link">
            <i class="material-icons">
                                   description
                            </i>
            Note
        </a>
            <a href="http://plustwonotes.com/syllabus" class="mdl-navigation__link">
            <i class="material-icons">
                                    assignment
                            </i>
            Syllabus
        </a>
            <a href="http://plustwonotes.com/blog" class="mdl-navigation__link">
            <i class="material-icons">
                                    web
                            </i>
            Blog
        </a>
    
    <div class="extra-navigation  divider--top divider--bottom ">
                    <a href="http://plustwonotes.com/posts/create" class="mdl-navigation__link">
                <i class="material-icons">create</i> Create Post
            </a>
        
                    <a href="http://plustwonotes.com/users/posts" class="mdl-navigation__link">
                <i class="material-icons">list</i> Posts
            </a>
        
                    <a href="http://plustwonotes.com/posts/trashed" class="mdl-navigation__link">
                <i class="material-icons">delete</i> Trashed Post
            </a>
        
                    <a href="http://plustwonotes.com/users" class="mdl-navigation__link">
                <i class="material-icons">people</i> Users
            </a>
            </div>

    <a class="mdl-navigation__link" href="http://plustwonotes.com/about">
        <i class="material-icons">help</i> About
    </a>
</nav></div>
        
        <main class="mdl-layout__content">
                <div class="page-content section--center mdl-typography--text-left mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
                <h3 class="text--light reveal reveal-top">Post List</h3>

    <div class="mdl-typography--text-center">
        <a href="http://plustwonotes.com/users/posts" class="text--decoration-none reveal reveal-right-staggered-250">
            All (30)
        </a> <span class="reveal reveal-bottom-staggered-250">|</span>
        <a href="http://plustwonotes.com/users/posts?by=amriterry" class="text--decoration-none reveal reveal-right-staggered-250">
            Mine (10)
        </a> <span class="reveal reveal-bottom-staggered-250">|</span>
        <a href="http://plustwonotes.com/users/posts?status=2" class="text--decoration-none reveal reveal-right-staggered-250">
            Content Ready (0)
        </a> <span class="reveal reveal-bottom-staggered-250">|</span>
        <a href="http://plustwonotes.com/users/posts?status=1" class="text--decoration-none reveal reveal-right-staggered-250">
            Published (29)
        </a> <span class="reveal reveal-bottom-staggered-250">|</span>
        <a href="http://plustwonotes.com/users/posts?imp" class="text--decoration-none reveal reveal-right-staggered-250">
            Important (6)
        </a> <span class="reveal reveal-bottom-staggered-250">|</span>
        <a href="http://plustwonotes.com/users/posts?featured" class="text--decoration-none reveal reveal-right-staggered-250">
            Featured (17)
        </a>
        <form method="GET" action="http://plustwonotes.com/users/posts" accept-charset="UTF-8" class="mdl-typography--text-center">
<!-- Search Input -->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-left">
    <label for="q" class="mdl-textfield__label">What are you searching for?</label>
    <input class="mdl-textfield__input" name="q" type="text" value="" id="q">
</div>

<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-js-ripple-effect reveal reveal-right"
       value="Find me that!"
       type="submit" />
</form>    </div>

            <div class="list-stat mdl-shadow--2dp reveal reveal-bottom-delay-250">
    <div class="list-stat__page">
        Page <span class="post-stat__numeric">1</span>
    </div>
    <span class="list-stat__numeric">
        1
    </span> - <span class="list-stat__numeric">
        25
    </span> out of <span class="list-stat__numeric">29</span> posts showing
</div>
        <div class="mdl-typography__text-left">
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--responsive mdl-shadow--2dp post-list">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Post Title</th>
                        <th class="mdl-data-table__cell--non-numeric">Category</th>
                        <th class="mdl-data-table__cell--non-numeric">Subject</th>
                        <th class="mdl-data-table__cell--non-numeric">Post Created At</th>
                        <th class="mdl-data-table__cell--non-numeric">Publish Date</th>
                        <th class="mdl-data-table__cell--non-numeric">Created By</th>
                        <th class="mdl-data-table__cell--non-numeric">Actions</th>
                        <th class="mdl-data-table__cell--non-numeric">Post Status</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 12 English His...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 English</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-12-english-hissan-question-2071" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-32">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-32"
        >
            View Post#32
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-12-english-hissan-question-2071/edit" target="_blank" class="post-list-item__action"  id="post-edit-32">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-32"
        >
            Edit Post#32
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-english-hissan-question-2071/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-32">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-32"
        >
            Take down Post#32
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-english-hissan-question-2071" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-32">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-32"
        >
        Move to Trash Post#32
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 12 Computer Sc...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 Computer</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-12-computer-science-hissan-questions-2071" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-31">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-31"
        >
            View Post#31
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-12-computer-science-hissan-questions-2071/edit" target="_blank" class="post-list-item__action"  id="post-edit-31">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-31"
        >
            Edit Post#31
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-computer-science-hissan-questions-2071/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-31">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-31"
        >
            Take down Post#31
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-computer-science-hissan-questions-2071" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-31">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-31"
        >
        Move to Trash Post#31
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 12 Economics H...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 Economics</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-12-economics-hissan-questions-2071" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-30">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-30"
        >
            View Post#30
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-12-economics-hissan-questions-2071/edit" target="_blank" class="post-list-item__action"  id="post-edit-30">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-30"
        >
            Edit Post#30
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-economics-hissan-questions-2071/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-30">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-30"
        >
            Take down Post#30
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-economics-hissan-questions-2071" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-30">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-30"
        >
        Move to Trash Post#30
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 11 Biology His...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Biology</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-11-biology-hissan-question-2071" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-29">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-29"
        >
            View Post#29
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-11-biology-hissan-question-2071/edit" target="_blank" class="post-list-item__action"  id="post-edit-29">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-29"
        >
            Edit Post#29
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-11-biology-hissan-question-2071/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-29">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-29"
        >
            Take down Post#29
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-11-biology-hissan-question-2071" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-29">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-29"
        >
        Move to Trash Post#29
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Current Electricity...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 Physics</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/current-electricity-short-questions" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-28">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-28"
        >
            View Post#28
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/current-electricity-short-questions/edit" target="_blank" class="post-list-item__action"  id="post-edit-28">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-28"
        >
            Edit Post#28
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/current-electricity-short-questions/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-28">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-28"
        >
            Take down Post#28
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/current-electricity-short-questions" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-28">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-28"
        >
        Move to Trash Post#28
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Biology Old Is Gold...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Biology</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/biology-old-is-gold-2066" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-27">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-27"
        >
            View Post#27
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/biology-old-is-gold-2066/edit" target="_blank" class="post-list-item__action"  id="post-edit-27">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-27"
        >
            Edit Post#27
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/biology-old-is-gold-2066/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-27">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-27"
        >
            Take down Post#27
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/biology-old-is-gold-2066" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-27">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-27"
        >
        Move to Trash Post#27
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Nuclear Energy (Shor...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 Physics</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/nuclear-energy-short-question" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-26">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-26"
        >
            View Post#26
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/nuclear-energy-short-question/edit" target="_blank" class="post-list-item__action"  id="post-edit-26">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-26"
        >
            Edit Post#26
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/nuclear-energy-short-question/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-26">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-26"
        >
            Take down Post#26
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/nuclear-energy-short-question" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-26">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-26"
        >
        Move to Trash Post#26
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                The Tale-Tell Heart
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 English</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/the-tale-tell-heart" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-25">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-25"
        >
            View Post#25
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/the-tale-tell-heart/edit" target="_blank" class="post-list-item__action"  id="post-edit-25">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-25"
        >
            Edit Post#25
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/the-tale-tell-heart/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-25">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-25"
        >
            Take down Post#25
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/the-tale-tell-heart" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-25">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-25"
        >
        Move to Trash Post#25
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Purgatory
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 English</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/purgatory" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-24">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-24"
        >
            View Post#24
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/purgatory/edit" target="_blank" class="post-list-item__action"  id="post-edit-24">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-24"
        >
            Edit Post#24
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/purgatory/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-24">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-24"
        >
            Take down Post#24
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/purgatory" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-24">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-24"
        >
        Move to Trash Post#24
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Fear
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 English</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/fear" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-23">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-23"
        >
            View Post#23
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/fear/edit" target="_blank" class="post-list-item__action"  id="post-edit-23">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-23"
        >
            Edit Post#23
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/fear/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-23">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-23"
        >
            Take down Post#23
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/fear" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-23">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-23"
        >
        Move to Trash Post#23
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Homologous Series
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Chemistry</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/homologous-series" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-22">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-22"
        >
            View Post#22
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/homologous-series/edit" target="_blank" class="post-list-item__action"  id="post-edit-22">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-22"
        >
            Edit Post#22
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/homologous-series/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-22">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-22"
        >
            Take down Post#22
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/homologous-series" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-22">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-22"
        >
        Move to Trash Post#22
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Classification Of Or...
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Chemistry</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/classification-of-organic-compounds" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-21">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-21"
        >
            View Post#21
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/classification-of-organic-compounds/edit" target="_blank" class="post-list-item__action"  id="post-edit-21">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-21"
        >
            Edit Post#21
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/classification-of-organic-compounds/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-21">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-21"
        >
            Take down Post#21
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/classification-of-organic-compounds" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-21">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-21"
        >
        Move to Trash Post#21
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Introduction To Orga...
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Chemistry</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/introduction-to-organic-chemistry" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-20">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-20"
        >
            View Post#20
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/introduction-to-organic-chemistry/edit" target="_blank" class="post-list-item__action"  id="post-edit-20">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-20"
        >
            Edit Post#20
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/introduction-to-organic-chemistry/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-20">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-20"
        >
            Take down Post#20
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/introduction-to-organic-chemistry" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-20">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-20"
        >
        Move to Trash Post#20
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Solid And Semiconduc...
                                                                    <span class="post__imp-tag">IMP</span>
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 Physics</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/solid-and-semiconductor-short-question-and-answers" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-18">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-18"
        >
            View Post#18
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/solid-and-semiconductor-short-question-and-answers/edit" target="_blank" class="post-list-item__action"  id="post-edit-18">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-18"
        >
            Edit Post#18
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/solid-and-semiconductor-short-question-and-answers/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-18">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-18"
        >
            Take down Post#18
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/solid-and-semiconductor-short-question-and-answers" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-18">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-18"
        >
        Move to Trash Post#18
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                The House Call - Que...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 English</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/the-house-call-question-answers" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-16">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-16"
        >
            View Post#16
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/the-house-call-question-answers/edit" target="_blank" class="post-list-item__action"  id="post-edit-16">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-16"
        >
            Edit Post#16
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/the-house-call-question-answers/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-16">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-16"
        >
            Take down Post#16
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/the-house-call-question-answers" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-16">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-16"
        >
        Move to Trash Post#16
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Wave And Wave Motion...
                                                                    <span class="post__imp-tag">IMP</span>
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 12 Physics</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/wave-and-wave-motion-short-question-answers" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-15">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-15"
        >
            View Post#15
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/wave-and-wave-motion-short-question-answers/edit" target="_blank" class="post-list-item__action"  id="post-edit-15">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-15"
        >
            Edit Post#15
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/wave-and-wave-motion-short-question-answers/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-15">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-15"
        >
            Take down Post#15
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/wave-and-wave-motion-short-question-answers" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-15">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-15"
        >
        Move to Trash Post#15
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Neb Grade 11 Regular...
                                                                    <span class="post__imp-tag">IMP</span>
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Blog</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@amriterry" target="_blank">
                                    Amrit Twanabasu
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/neb-grade-11-regular-result-2073-coming-today" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-14">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-14"
        >
            View Post#14
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/neb-grade-11-regular-result-2073-coming-today/edit" target="_blank" class="post-list-item__action"  id="post-edit-14">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-14"
        >
            Edit Post#14
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/neb-grade-11-regular-result-2073-coming-today/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-14">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-14"
        >
            Take down Post#14
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/neb-grade-11-regular-result-2073-coming-today" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-14">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-14"
        >
        Move to Trash Post#14
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Oxford Comma
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Blog</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/oxford-comma" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-13">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-13"
        >
            View Post#13
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/oxford-comma/edit" target="_blank" class="post-list-item__action"  id="post-edit-13">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-13"
        >
            Edit Post#13
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/oxford-comma/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-13">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-13"
        >
            Take down Post#13
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/oxford-comma" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-13">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-13"
        >
        Move to Trash Post#13
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 11 Computer Sc...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Note</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Computer</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-xi-cs-model-question" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-12">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-12"
        >
            View Post#12
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-xi-cs-model-question/edit" target="_blank" class="post-list-item__action"  id="post-edit-12">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-12"
        >
            Edit Post#12
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-xi-cs-model-question/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-12">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-12"
        >
            Take down Post#12
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-xi-cs-model-question" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-12">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-12"
        >
        Move to Trash Post#12
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 11 Computer Sc...
                                                                                                    <span class="post__featured-tag">Featured</span>
                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Syllabus</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 Computer</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">2 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@Sduwal" target="_blank">
                                    Saroj Duwal
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-xi-cs-syllabus" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-11">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-11"
        >
            View Post#11
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-xi-cs-syllabus/edit" target="_blank" class="post-list-item__action"  id="post-edit-11">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-11"
        >
            Edit Post#11
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-xi-cs-syllabus/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-11">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-11"
        >
            Take down Post#11
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-xi-cs-syllabus" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-11">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-11"
        >
        Move to Trash Post#11
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                B.sc Csit Entrance E...
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Blog</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric">6 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">7 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@amriterry" target="_blank">
                                    Amrit Twanabasu
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/bsc-csit-entrance-exam-notice-for-2073" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-9">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-9"
        >
            View Post#9
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/bsc-csit-entrance-exam-notice-for-2073/edit" target="_blank" class="post-list-item__action"  id="post-edit-9">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-9"
        >
            Edit Post#9
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/bsc-csit-entrance-exam-notice-for-2073/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-9">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-9"
        >
            Take down Post#9
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/bsc-csit-entrance-exam-notice-for-2073" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-9">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-9"
        >
        Move to Trash Post#9
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Institute Of Enginee...
                                                                    <span class="post__imp-tag">IMP</span>
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Blog</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric">6 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">7 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@amriterry" target="_blank">
                                    Amrit Twanabasu
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/ioe-entrance-exam-2073" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-8">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-8"
        >
            View Post#8
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/ioe-entrance-exam-2073/edit" target="_blank" class="post-list-item__action"  id="post-edit-8">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-8"
        >
            Edit Post#8
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/ioe-entrance-exam-2073/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-8">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-8"
        >
            Take down Post#8
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/ioe-entrance-exam-2073" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-8">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-8"
        >
        Move to Trash Post#8
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Kathmandu University...
                                                                    <span class="post__imp-tag">IMP</span>
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Blog</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric">6 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">7 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@amriterry" target="_blank">
                                    Amrit Twanabasu
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/kathmandu-university-opens-admission-2016" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-7">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-7"
        >
            View Post#7
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/kathmandu-university-opens-admission-2016/edit" target="_blank" class="post-list-item__action"  id="post-edit-7">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-7"
        >
            Edit Post#7
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/kathmandu-university-opens-admission-2016/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-7">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-7"
        >
            Take down Post#7
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/kathmandu-university-opens-admission-2016" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-7">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-7"
        >
        Move to Trash Post#7
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 12 Science 207...
                                                                    <span class="post__imp-tag">IMP</span>
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Blog</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric">6 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">7 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@amriterry" target="_blank">
                                    Amrit Twanabasu
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-12-science-2073-result-published" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-6">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-6"
        >
            View Post#6
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-12-science-2073-result-published/edit" target="_blank" class="post-list-item__action"  id="post-edit-6">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-6"
        >
            Edit Post#6
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-science-2073-result-published/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-6">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-6"
        >
            Take down Post#6
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-12-science-2073-result-published" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-6">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-6"
        >
        Move to Trash Post#6
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                            <tr class="post-list-item">
                            <td class="mdl-data-table__cell--non-numeric">
                                Grade 11 English Syl...
                                                                                            </td>
                            <td class="mdl-data-table__cell--non-numeric">Syllabus</td>
                            <td class="mdl-data-table__cell--non-numeric">Grade 11 English</td>
                            <td class="mdl-data-table__cell--non-numeric">8 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">8 months ago</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a href="http://plustwonotes.com/@amriterry" target="_blank">
                                    Amrit Twanabasu
                                </a>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric"><span class="post-list-item__actions">

    <!-- Read Action -->
            <a href="http://plustwonotes.com/posts/grade-11-english-syllabus" target="_blank" class="post-list-item__action post-list-item-action__read" id="post-view-5">
            <i class="material-icons">visibility</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-view-5"
        >
            View Post#5
        </p>
    
    <!-- Edit Action -->
            <a href="http://plustwonotes.com/posts/grade-11-english-syllabus/edit" target="_blank" class="post-list-item__action"  id="post-edit-5">
            <i class="material-icons">edit</i>
        </a>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-edit-5"
        >
            Edit Post#5
        </p>
    
    <!-- Content Ready Action -->
    
    <!-- Draft Action -->
    
    <!-- Publish Action -->
    
    <!-- UnPublish Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-11-english-syllabus/unpublish" accept-charset="UTF-8"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-unpublish-5">
            <i class="material-icons">vertical_align_bottom</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-unpublish-5"
        >
            Take down Post#5
        </p>
    
    <!-- Restore Action -->
    
    <!-- Delete Action -->
            <form method="POST" action="http://plustwonotes.com/posts/grade-11-english-syllabus" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="PBLpJ9iJqN2tCHA91qtsQluH6aDnURxD0BrRaTPn">
        <button type="submit" class="post-list-item__action" id="post-delete-5">
            <i class="material-icons">delete</i>
        </button>
        </form>
        <p class="
                mdl-tooltip
                mdl-tooltip--large
                mdl-tooltip--top"
           for="post-delete-5"
        >
        Move to Trash Post#5
        </p>
    </span></td>
                            <td class="mdl-data-table__cell--non-numeric">Published</td>
                        </tr>
                                    </tbody>
            </table>
            <ul class="pagination">
        <!-- Previous Page Link -->
                    <li class="disabled" disabled><span>&laquo;</span></li>
        
        <!-- Pagination Elements -->
                    <!-- "Three Dots" Separator -->
            
            <!-- Array Of Links -->
                                                                        <li class="pagination__link mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--accent"><span>1</span></li>
                                                                                <li><a href="http://plustwonotes.com/users/posts?page=2" class="pagination__link mdl-js-ripple-effect mdl-js-button mdl-button">2</a></li>
                                                        
        <!-- Next Page Link -->
                    <li><a href="http://plustwonotes.com/users/posts?page=2" rel="next" class="pagination__link mdl-js-ripple-effect mdl-js-button mdl-button">&raquo;</a></li>
            </ul>
        </div>
            </div>
    </div>

                <footer class="mdl-mega-footer">
    <div class="mdl-mega-footer__middle-section">
        <h6 class="mdl-typography--text-center reveal reveal-top">
            Copyright &copy; Plus Two Notes<br/> 2017
        </h6>
        <h6 class="mdl-typography--text-center reveal reveal-bottom">
            Designed & Developed with &heartsuit; by <a href="http://amrittwanabasu.com.np" target="_blank" class="text--color-white text--decoration-none">Amrit Twanabasu</a>
        </h6>

        <br />

        <p class="mdl-typography--text-center reveal reveal-bottom-delay-250">
            &compfn; <a href="http://plustwonotes.com/sitemap" class="text--color-light text--decoration-none">Site Map</a> &compfn;
        </p>
    </div>
    <div class="mdl-mega-footer__bottom-section mdl-typography--text-center">
        <h6 class="reveal reveal-right-delay-500">
            Yes, of course we are on social sites. Who isn't these days?
        </h6>
        <a href="https://facebook.com/plustwonotes" class="text--decoration-none reveal reveal-bottom-delay-750" target="_blank">
            <img src="http://plustwonotes.com/img/facebook-logo-button.png" alt="Plus Two Notes's Facebook page">
        </a>
        <a href="https://plus.google.com/+Plustwonotespage" class="text--decoration-none reveal reveal-bottom-delay-750" target="_blank">
            <img src="http://plustwonotes.com/img/google-plus-logo-button.png" alt="Plus Two Notes's Google Plus page">
        </a>
        <a href="https://www.youtube.com/c/Plustwonotespage" class="text--decoration-none reveal reveal-bottom-delay-750" target="_blank">
            <img src="http://plustwonotes.com/img/youtube-logo-button.png" alt="Plus Two Notes's Youtube Channel page">
        </a>
    </div>
</footer>
        </main>
    </div>

    <mdl-snackbar></mdl-snackbar>

    <script type="text/javascript" src="/build/js/app-3796efb676.js"></script>

    
    <script type="text/javascript">
        /**
         * Root Vue Instance.
         */
        window.app = new Vue({
            el : 'body',
            store: window.store,
        });
    </script>
</body>
</html>