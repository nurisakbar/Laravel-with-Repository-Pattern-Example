<table class='table table-bordered'>
    <tr>
        <td>Name</td>
        <td>{{ Form::text('name',null,['placeholder'=>'User Name','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ Form::email('email',null,['placeholder'=>'User Email','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>{{ Form::password('password',['placeholder'=>'user password','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td></td>
        <td>
            {{ Form::submit('simpan',['class'=>'btn btn-success'])}}
            {{ link_to('user','Kembali',['class'=>'btn btn-info'])}}
        </td>
    </tr>
</table>