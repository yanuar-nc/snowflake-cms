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
            'select' => '<select name="{{name}}"class="form-control" {{attrs}}>{{content}}</select>',
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
            'select' => '<div class="col-md-6"><select name="{{name}}"class="form-control" {{attrs}}>{{content}}</select></div>',
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
/*
'templates' => [
    'button' => '<button{{attrs}}>{{text}}</button>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
    'checkboxFormGroup' => '{{label}}',
    'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
    'dateWidget' => '{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}',
    'error' => '<div class="error-message">{{content}}</div>',
    'errorList' => '<ul>{{content}}</ul>',
    'errorItem' => '<li>{{text}}</li>',
    'file' => '<input type="file" name="{{name}}"{{attrs}}>',
    'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    'formStart' => '<form{{attrs}}>',
    'formEnd' => '</form>',
    'formGroup' => '{{label}}{{input}}',
    'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    'label' => '<label{{attrs}}>{{text}}</label>',
    'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',
    'legend' => '<legend>{{text}}</legend>',
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
    'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
    'radioWrapper' => '{{label}}',
    'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
    'submitContainer' => '<div class="submit">{{content}}</div>',
]
*/
?>