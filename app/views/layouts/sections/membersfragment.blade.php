<div class="list-group">
  <a href="{{ route('rotas') }}" @if (Request::is('membersarea/rotas') )
                                    class="list-group-item active"
                                @else
                                    class="list-group-item"
                                @endif
                                >
    <h5 class="list-group-item-heading">Rotas</h5>
    <small class="list-group-item-text">All the church rotas.</small>
  </a>
  <a href="{{ route('notes') }}" @if (Request::is('membersarea/notes'))
                                    class="list-group-item active"
                                @else
                                    class="list-group-item"
                                @endif
                                >
    <h5 class="list-group-item-heading">Bible study notes</h5>
    <small class="list-group-item-text">Notes for the mid-week Bible study.</small>
  </a>
  <a href="{{ route('documents') }}" @if (Request::is('membersarea/documents'))
                                    class="list-group-item active"
                                @else
                                    class="list-group-item"
                                @endif
                                >
    <h5 class="list-group-item-heading">Documents</h5>
    <small class="list-group-item-text">Documents for the Annual and Quarterly Church Meetings.</small>
  </a>
  <a href="{{ route('songs') }}" @if (Request::is('membersarea/songs'))
                                    class="list-group-item active"
                                @else
                                    class="list-group-item"
                                @endif
                                >
    <h5 class="list-group-item-heading">Songs</h5>
    <small class="list-group-item-text">Search the hymns and songs we know by scripture reference and keyword.</small>
  </a>
</div>
