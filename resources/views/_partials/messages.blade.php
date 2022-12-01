@if (session()->has('success'))
    <input id="type-notify" type="hidden" value="success">
    <input id="msg-notify" type="hidden" value="{{ session()->get('success') }}">
@endif

@if (session()->has('fail'))
    <input id="type-notify" type="hidden" value="error">
    <input id="msg-notify" type="hidden" value="{{ session()->get('fail') }}">
@endif

@if ($errors->any())
    <input id="type-notify" type="hidden" value="error">
    <input id="msg-notify" type="hidden" value="Complete correctamente los datos solicitados.">
@endif

<input id="route-notify" type="hidden" value="{{ session()->get('redirect') }}">
