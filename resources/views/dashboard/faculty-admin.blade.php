<div class="db-col mb-2">
    <div class="db-card">
        <h5 class="card-header text-center">My Accomplishments</h5>
        <div class="card-body d-flex justify-content-center">
            <div class="data-card shadow-sm" style="background-color: #d4784a;">
                <div class="db-text">
                    <p class="db-stat">{{ $countAccomplishmentsSubmitted }}</p>
                    <a class="db-text" style="word-wrap: break-word;" href="{{ route('reports.consolidate.myaccomplishments') }}">SUBMISSIONS</a>
                </div>
            </div>
            <div class="data-card shadow-sm" style="background-color: #d4784a; border-left: 3px solid white;">
                <div class="db-text">
                    <p class="db-stat">{{ $countAccomplishmentsReturned }}</p>
                    <a class="db-text" style="word-wrap: break-word;" href="{{ route('reports.consolidate.myaccomplishments') }}">RETURNED</a>
                </div>
            </div>
        </div>
    </div>
</div>
