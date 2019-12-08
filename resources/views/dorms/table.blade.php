<div class="table-responsive">
    <table class="table" id="dorms-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dorms as $dorm)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['dorms.destroy', $dorm->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dorms.show', [$dorm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dorms.edit', [$dorm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
