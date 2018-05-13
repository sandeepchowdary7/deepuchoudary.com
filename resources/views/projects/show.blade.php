<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ $project->name }}
        @if (! $project->owner)
            <small><span class="badge badge-warning float-right">Contributor only</span></small>
        @endif
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <small>
                <a href="{{ $project->html_url }}" target="_blank">{{ substr($project->html_url, 8) }}</a>
            </small>
        </h6>
        <p class="card-text"><small>{{ $project->description }}</small></p>

        <p>
            <div class="row">
                @if ($project->downloads_count > 500)
                <div class="col-lg-6 col-md-6 mx-auto">
                    <a class="btn btn-sm" href="{{ $project->html_url }}"><small>{{ number_format_locale($project->downloads_count) }} Downloads</small></a>
                </div>
                @endif
                <div class="col-lg-6 col-md-6 mx-auto">
                    <a class="btn btn-sm" href="{{ $project->html_url }}"><small>{{ number_format_locale($project->stargazers_count) }} Stars</small></a>
                </div>
            </div>
        </p>
    </div>
</div>
