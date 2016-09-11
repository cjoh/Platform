<div class='form-group'>
    {!! Form::label($settingName, $moduleInfo['description']) !!}
    <?php if (isset($dbSettings[$settingName])): ?>
        {!! Form::input('number', $settingName, old($settingName, $dbSettings[$settingName]->plainValue), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]) !!}
    <?php else: ?>
        {!! Form::input('number', $settingName, old($settingName), ['class' => 'form-control', 'placeholder' => trans($moduleInfo['description'])]) !!}
    <?php endif; ?>
</div>