<?php
return [
    'inputContainer' => '<div class="form-group">{{content}}</div>',
    'inputContainerError' => '<div class="form-group has-error">{{content}}</div>',
    'formStart' => '<form {{attrs}} class="form">',
    'input' => '<input type="{{type}}" name="{{name}}" {{attrs}} class="form-control">',
    'textarea' => '<textarea name="{{name}}" {{attrs}} class="form-control textarea">{{value}}</textarea>',
    'formGroup' => '{{label}}{{input}}{{error}}',
    'label' => '<label {{attrs}}>{{text}}</label>',
    'error' => '<span class="help-block">{{content}}</span>',
    'checkboxContainer' => '<div class="form-group">{{content}}</div><br/>',
    'checkboxFormGroup' => '{{label}}',
    'checkbox' => '<input type="checkbox" value="{{value}}" name="{{name}}" {{attrs}} class="minimal-red" />',
    'select' => '<select {{attrs}} class="form-control" name="{{name}}">{{content}}</select>',
    'button' => '<div style="padding-left:3px">'
        . '<button {{attrs}} class="btn btn-danger">{{text}}</button>'
];
