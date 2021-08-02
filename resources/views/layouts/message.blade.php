@if(Session::has('message_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>{{ Session::get('message_success') }}</span>
    </div>
@endif
