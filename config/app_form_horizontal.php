<?php
return array(
    'inputContainer' => '<div class="form-group col-sm-6">{{content}}</div>',
    'inputContainerError' => '<div class="form-group col-sm-6 has-error">{{content}}</div>',
    'formStart' => '<form {{attrs}} class="form-horizontal">',
    'input' => '<input type="{{type}}" name="{{name}}" {{attrs}} class="form-control">',
    'textarea' => '<textarea name="{{name}}" {{attrs}} class="form-control">{{value}}</textarea>',
    'formGroup' => '{{label}}<div class="col-sm-8">{{input}}{{error}}</div>',
    'label' => '<label {{attrs}} class="col-sm-4 control-label">{{text}}</label>',
    'error' => '<span class="help-block">{{content}}</span>',
    'checkboxContainer' => '<div class="form-group checkbox col-sm-6">{{content}}</div><br/>',
    'checkboxFormGroup' => '<div class="col-sm-offset-4">{{label}}</div>',
    'select' => '<select {{attrs}} class="form-control" name="{{name}}">{{content}}</select>',
    'button' => '<div class="col-sm-4 col-sm-offset-2" style="padding-left:3px">'
        . '<button {{attrs}} class="btn btn-danger">{{text}}</button>'
);
