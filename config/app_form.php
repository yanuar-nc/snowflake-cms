<?php 
return [
    'Templates'=>[
        'shortForm' => [
            // 'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-4"><input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/></div>',
            'select' => '<div class="col-md-4"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'inputContainerError' => '<div class="input {{type}}{{required}} has-error">{{content}}{{error}}</div>',
            'checkContainer' => '',
            'error' => '<div class="col-md-offset-2 col-md-10 mb10 error-message">{{content}}</div>',
        ],
        'longForm' => [
            // 'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-6"><input type="{{type}}" name="{{name}}" class="form-control" {{attrs}} /></div>',
            'select' => '<div class="col-md-6"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'inputContainerError' => '<div class="form-group {{type}}{{required}} has-error">{{content}}{{error}}</div>',
            'checkContainer' => '',
            'error' => '<div class="col-md-offset-2 col-md-10 error-message"><i>{{content}}</i></div>',
            'submitContainer' => '<div class="submit">{{content}}</div>',
        ],
        'fullForm' => [
            // 'formstart' => '<form class="" {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-10"><input type="{{type}}" name="{{name}}" class="form-control" {{attrs}} /></div>',
            'select' => '<div class="col-md-10"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'inputContainerError' => '<div class="input {{type}}{{required}} has-error">{{content}}{{error}}</div>',
            'checkContainer' => '',
            'error' => '<div class="col-md-offset-2 col-md-10 mb10 error-message">{{content}}</div>',
        ],
        'simpleForm' => [
            'label' => false,
            'inputContainer' => '{{content}}',
            'checkContainer' => '',
            'error' => '<div class="col-md-12 mb10 error-message">{{content}}</div>',

        ]
    ]
];
?>