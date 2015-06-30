@if (Session::has('egall.message'))
  @if (Session::has('egall.overlay'))
    @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('egall.title'), 'body' => Session::get('egall.message')])
  @else
    <div class="alert alert-{{ Session::get('egall.level') }}">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

      {{ Session::get('egall.message') }}
    </div>
  @endif
@endif