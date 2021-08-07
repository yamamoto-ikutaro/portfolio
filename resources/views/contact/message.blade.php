{!! $contact->name.'さんからのお問い合わせ' !!}<br>
<p>▼Eメール</p>
{!! $contact->email !!}<br>
<p>▼メッセージ</p>
{!! nl2br(e($contact->content)) !!}