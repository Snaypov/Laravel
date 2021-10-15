<div class="row" style="padding: 20px 20px;">
    <div class="col" style="border-right: 1px solid gray">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col">
        {!! Form::label('slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row" style="padding: 20px 20px;">
        {!! Form::label('content') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>
<div class="row" style="padding: 0px 20px;">
        {!! Form::label('img') !!}
        {!! Form::file('img', ['class' => 'form-control']) !!}
</div>
<div class="row" style="padding: 0px 20px;">
        {!! Form::label('price') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="row" style="padding: 0px 20px;">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $category, null,['class' => 'form-control']) !!}
</div>