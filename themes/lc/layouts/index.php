{{ define "main" }}
<section class="section">

                    <div class="content">
                        <p class="title">aassd</p>
                        <p class="subtitle">docs</p>
                        <div class="content">
                            <ul>
                                {{ range where .Site.RegularPages "Section" "docs"}}
                                <li><a href="{{.RelPermalink}}">{{.Title}}</a> - {{.Description}}</li>
                                {{end}}
                            </ul>
                        </div>
                    </div>

</section>

{{ "<? echo 'hello'; ?>" | safeHTML }}
{{end}}