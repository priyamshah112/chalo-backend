<div class="table-responsive">
    <table class="table" id="activities-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($activities as $activity)
            <tr>
                <td>{{ $activity->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['activities.destroy', $activity->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('activities.show', [$activity->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('activities.edit', [$activity->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
