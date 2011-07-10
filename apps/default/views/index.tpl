{extends file="base.tpl"}
{block name="body"}
    <h1>{setting value="site.title"}</h1>
    <form action="/add" method="post">
        <label for="repository">Repository URL</label>
        <input type="text" id="repository" name="repository" placeholder="e.g. git@github.com:user/repo.git" />
        <input type="submit" value="Add it!" />
    </form>
{/block}
