<div class="team--inner container auto-team-grid pt-1 pb-1">     
     @foreach ($members as $member)
          @includeIf('front.globalcard.teamcard', ['member' => $member])
     @endforeach
 </div>