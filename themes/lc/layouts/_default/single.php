{{ define "main" }}
<section class="section columns is-mobile is-centered">
    <div class="container column is-half">
        <h1 class="title">{{ .Title }}</h1>
        <h2 class="subtitle">
            {{ .Description  }}
        </h2>
        <div class="content">
        {{ .Content }}
        </div>
    </div>
</section>
{{ end }}
