@if (count($errors))
    <div class="section">
        <div class="card red">
            <div class="card-content">
                <span class="card-title white-text">Oops, weaky snappy errors</span>
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="white-text">∆ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif