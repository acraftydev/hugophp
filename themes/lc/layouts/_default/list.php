{{ define "main" }}
<section class="section">
    <div class="container">
        <ul>
            {{ range .Paginator.Pages.ByWeight }}
                <li><a href="{{.RelPermalink}}"> {{ .Title }}</a> - {{.Description}}</li>
            {{ end }}
        </ul>
        {{- template "_internal/pagination.html" . -}}
    </div>
</section>
{{ end }}
