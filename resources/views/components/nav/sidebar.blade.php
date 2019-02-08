<div class="list-group">
    <p class="font-weight-bold text-uppercase small" style="color: #909CA8; letter-spacing: 1.2px">Resources</p>

    <a href="{{ url('blog') }}" class="list-group-item border-0 py-1 bg-transparent @if(Request::url() == url('blog')) font-weight-bold text-primary @else text-dark @endif">Blog</a>
    <a href="{{ route('links.index') }}" class="list-group-item border-0 py-1 bg-transparent @if(Route::is('links.index')) font-weight-bold text-primary @else text-dark @endif">Links</a>
    <a href="{{ route('calendar.index') }}" class="list-group-item border-0 py-1 bg-transparent @if(Route::is('calendar.index')) font-weight-bold text-primary @else text-dark @endif">Calendar</a>

    <p class="font-weight-bold text-uppercase small pt-5" style="color: #909CA8; letter-spacing: 1.2px">Local</p>
    <a href="#" class="list-group-item border-0 py-1 bg-transparent text-dark">Eats</a>
    <a href="#" class="list-group-item border-0 py-1 bg-transparent text-dark">Playgrounds</a>

    <p class="font-weight-bold text-uppercase small pt-5" style="color: #909CA8; letter-spacing: 1.2px">Social</p>
    <a href="#" class="list-group-item border-0 py-1 bg-transparent text-dark">Facebook</a>
    <a href="#" class="list-group-item border-0 py-1 bg-transparent text-dark">Twitter</a>
    <a href="#" class="list-group-item border-0 py-1 bg-transparent text-dark">Instagram</a>
</div>