{if $message != ""}
    <h1>{message}</h1>
{else}
    <h1>No message</h1>
{endif}

{contents}
    <h2>{title} | {page_title}</h2>
    <p>{text}</p>
    <hr>
{/contents}
