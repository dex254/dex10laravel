@include('dashboard.header')
<div class="main-content">
    <div class="main-content">
        <form method="POST" action="{{ route('requests.store') }}">
            @csrf
            <input type="hidden" name="sender_id" value="{{ auth()->user()->id }}">
            
            <label for="theme">Theme:</label>
            <input type="text" name="theme" id="theme">
            
            <label for="colors">Colors:</label>
            <input type="text" name="colors" id="colors">
            
            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" id="due_date">
            
            <label for="usage">Usage:</label>
            <textarea name="usage" id="usage"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
    
    
</div>

@include('dashboard.footer')