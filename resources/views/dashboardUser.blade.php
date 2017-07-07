@extends('layouts.master')

@section('content')
    @include('includes.message-block')
 
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say... / Only super admin can access this page</h3></header>
            @foreach($userVar as $userVari)
                <article class="post" data-postid="{{ $userVari->id }}">
                    <p>{{ $userVari->first_name }} | Id :{{ $userVari->id }} | Status :
                    @if($userVari->user_status == -1)
                    Not verfied
                    @elseif($userVari->user_status == 0)
                    Deactive
                    @elseif($userVari->user_status==1)
                    Active
                    @endif


</p>
                    <div class="info">
                        User Email  {{ $userVari->email }} | Reg Date {{ $userVari->created_at }}
                    </div>
                    <div class="interaction">


                        @if(Auth::user()->id !== $userVari->id)
                            
                            <a href="{{ route('user.approve', ['id' => $userVari->id]) }}">Activate </a> |
                            <a href="{{ route('user.disapprove', ['id' => $userVari->id]) }}">Deactivate </a> |
                            <a href="#" class="edit">Edit </a> |
                           <a href="#" class="{{ route('user.delete', ['id' => $userVari->id]) }}">Delete </a>
                        
                        @endif
                     </div>
                </article>
            @endforeach
        </div>
    </section>

    <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-body">Edit the Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit-user') }}';
 
    </script>
@endsection