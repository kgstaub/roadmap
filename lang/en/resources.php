<?php

return [
    'date'        => 'Date',
    'published-at' => 'Published at',
    'created-at'  => 'Created at',
    'updated-at'  => 'Updated at',
    'board'       => [
        'label'        => 'Board',
        'label-plural' => 'Boards',
        'title'        => 'Title',
        'project'      => 'Project',
        'description'  => 'Description',
        'description-helper-text' => 'This is the description of the board. Used as META description for SEO purposes.',
        'visible'      => 'Visible',
        'visible-helper-text' => 'This will make the board visible to your users. If you want to hide the board, toggle this off. Users can still access the board by using the direct link.',
        'user-can-create' => 'User can create',
        'user-can-create-helper-text' => 'This will allow your users to create items on this board.',
        'block-comments' => 'Block comments',
        'block-comments-helper-text' => 'This will block comments on this board.',
        'block-votes' => 'Block votes',
        'block-votes-helper-text' => 'This will block votes on this board.',
        'sort-items-by' => 'Sort items by',
        'popular' => 'Popular',
        'latest' => 'Latest',
    ],
    'changelog'   => [
        'label'         => 'Changelog',
        'label-plural'  => 'Changelogs',
        'title'         => 'Title',
        'author'        => 'Author',
        'related-items' => 'Related items',
        'content'       => 'Content',
        'published'     => 'Published',
        'is-published'  => 'Is published',
    ],
    'comment'     => [
        'label'               => 'Comment',
        'label-plural'        => 'Coments',
        'user'                => 'User',
        'content'             => 'Content',
        'item'                => 'Item',
        'votes'               => 'Votes',
        'private'             => 'Private',
        'private-helper-text' => 'This will make the comment private. Only the employees and administrators can see this comment.',
    ],
    'inbox'       => [
        'label' => 'Inbox',
    ],
    'item'        => [
        'label'                          => 'Item',
        'label-plural'                   => 'Items',
        'heading'                        => 'Heading',
        'title'                          => 'Title',
        'votes'                          => 'Votes',
        'project'                        => 'Project',
        'board'                          => 'Board',
        'slug'                           => 'Slug',
        'content'                        => 'Content',
        'pinned'                         => 'Pinned',
        'pinned-helper-text'             => 'This will pin the item to the top of the board.',
        'private'                        => 'Private',
        'private-comment'                => 'As a private comment?',
        'private-helper-text'            => 'This will make the item private. Only the employees and administrators can see this item.',
        'user'                           => 'Assignee',
        'users'                          => 'Assignees',
        'users-helper-text'              => 'Assign administrators or employees to this item.',
        'notify-subscribers'             => 'Notify subscribers',
        'notify-subscribers-helper-text' => 'This will notify all subscribers of this item.',
        'assigned-to-me'                 => 'Assigned to me',
        'assigness'                      => 'Assignees',
        'assigned-to'                    => 'Assigned to',
        'item-filters'                   => 'Item filters',
        'view-public'                    => 'View public',
        'merge'                          => 'Merge Item',
        'merge-helper-text'              => 'Select the item you want to merge it with. This action cannot be undone.',
        'merge-submit'                   => 'Merge with selected and delete current item',
        'merging'                        => 'Merging',
        'merged-message'                 => 'Merged %s into %s',
        'merged-content'                 => '**Merged %s into this item** \n\n Created by: %s \n\n %s',
        'activities'                     => 'Activities',
        'description'                    => 'Description',
        'github'                         => [
            'label'        => 'Github',
            'issue'        => 'Github Issue',
            'view'         => 'View Issue',
            'create'       => 'Create Github Issue',
            'create-new'   => 'Create new Github Issue',
            'repository'   => 'Github Repository',
            'title'        => 'Github Title',
            'body'         => 'Github Body',
            'created-text' => 'Github issue with number #%s has been created in %s.',
        ],
    ],
    'project'     => [
        'label'        => 'Project',
        'label-plural' => 'Projects',
        'name'         => 'Name',
        'title'        => 'Title',
        'group'        => 'Group',
        'group-helper-text' => 'Type a group here to categorise them in your roadmap',
        'slug'         => 'Slug',
        'slug-helper-text' => 'Leave blank to generate one automatically',
        'icon'         => 'Icon',
        'private'      => 'Private',
        'private-helper-text' => 'This will make the project private. Only the employees and administrators can see this project.',
        'github-repo'  => 'Github Repository',
        'viewers'      => 'Viewers',
        'viewers-helper-text' => 'Allow certain users to view this project',
        'description'  => 'Description',
        'view-public'  => 'View public',
    ],
    'tag' => [
        'label' => 'Tag',
        'label-plural' => 'Tags',
        'name' => 'Name',
        'changelog' => 'Changelog',
    ],
    'user'        => [
        'label'        => 'User',
        'label-plural' => 'Users',
        'name'         => 'Name',
        'email'        => 'E-mail',
        'role'         => 'Role',
        'roles'        => [
            'user'     => 'User',
            'employee' => 'Employee',
            'admin'    => 'Administrator',
        ],
    ],
    'vote'        => [
        'label'        => 'Vote',
        'label-plural' => 'Votes',
        'item'         => 'Item',
        'subscribed'   => 'Subscribed',
        'project'      => 'Project',
        'user'         => 'User',
    ]
];
