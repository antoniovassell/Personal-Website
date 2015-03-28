<style>
canvas {
    position: relative;
    bottom: 0;
}
#footercont {
    font-weight: normal;
    font-size: 0.8em;
    position: relative;
    bottom: 0;
    z-index: 10;
    width: 100%;
}
</style>

<div id="footercont" class="footer">
	<div class="container">
        <div class="row">
            <div class="col-md-4" data-sr>
                <div class="footer-logo">
                    <a href="/">
                        <?= $this->Html->image('antoniovassell.icon.png'); ?> Antonio Vassell
                    </a>
                </div>
            </div>
            <div class="col-md-4" data-sr>
                <dl class="footer-nav">
                    <dt class="nav-title"><?= __('Your Destiny'); ?></dt>
                    <dd class="nav-item"><?= $this->Html->link(__('Budget'), '#'); ?></dd>
                    <dd class="nav-item"><?= $this->Html->link(__('Buckestalk'), '#'); ?></dd>
                    <dd class="nav-item"><?= $this->Html->link(__('Wordiator'), '#'); ?></dd>
                </dl>
            </div>
            <div class="col-md-4" data-sr>
                <h3><?= __('Newsletter'); ?></h3>
                <?= $this->Form->create('Newsletter'); ?>
                <?= $this->Form->input('email_address'); ?>
                <?= $this->Form->button(__('Subscribe')); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div><! --/row -->
		<div class="row">
			<div class="col-md-12">
				<p class="f-content">&copy; 2014 <?= \Cake\Core\Configure::read('App.name'); ?>. All rights reserved.</p>
			</div>
		</div><! --/row -->
	</div><! --/container -->
</div><! --/footerwrap -->

<script>
    var _requestAnimationFrame = window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.msRequestAnimationFrame || window.oRequestAnimationFrame || function(callback){ window.setTimeout(callback, 1000/60) };

    var canvas = document.createElement('canvas'),
        ctx    = canvas.getContext('2d');
    var footer = document.getElementById('footercont');

    var springs = [],
        MAX_SPRINGS = 120;

    canvas.width = window.innerWidth;
    canvas.height = 200;
    document.body.appendChild( canvas );
    document.body.appendChild( footer );
    ctx.fillStyle = '#ff514c';

    for (var i=0; i<MAX_SPRINGS; i++)
    {
        springs[i] = new Spring();
    }

    function updateSprings( spread )
    {
        var i;
        for (i=0; i<MAX_SPRINGS; i++)
        {
            springs[i].update( 0.02, 0.1 );
        }

        var leftDeltas = [],
            rightDeltas = [];

        for (var t=0; t<8; t++) {

            for (i=0; i<MAX_SPRINGS; i++)
            {
                if (i > 0)
                {
                    leftDeltas[i] = spread * (springs[i].p - springs[i-1].p);
                    springs[i-1].v += leftDeltas[i];
                }
                if (i < MAX_SPRINGS-1)
                {
                    rightDeltas[i] = spread * (springs[i].p - springs[i+1].p);
                    springs[i+1].v += rightDeltas[i];
                }
            }

            for (i=0; i<MAX_SPRINGS; i++)
            {
                if (i > 0)
                    springs[i-1].p += leftDeltas[i];
                if (i < MAX_SPRINGS-1)
                    springs[i+1].p += rightDeltas[i];
            }

        }

    }

    function Spring()
    {
        this.p = 0;
        this.v = 0;
        this.update = function( damp, tens )
        {
            this.v += (-tens * this.p - damp * this.v);
            this.p += this.v;
        }
    }

    function renderWaves()
    {
        var i;
        ctx.beginPath();
        ctx.moveTo( 0, canvas.height );
        for (i=0; i<MAX_SPRINGS; i++)
        {
            ctx.lineTo( i * (canvas.width / MAX_SPRINGS), (canvas.height/2) + springs[i].p );
        }
        ctx.lineTo( canvas.width, canvas.height );
        ctx.fill();
    }

    function Octopus()
    {
        this.sections = [];
        this.nSec = 20;
        this.len = 25;
        this.loop = 0;
        this.init = function()
        {
            for (var i=0; i<this.nSec; i++)
            {
                this.sections[i] = 0;
            }
        };

        this.render = function()
        {
            ctx.save();
            ctx.translate( canvas.width / 2, (canvas.height / 2) + 50 );
            ctx.scale(1.4, 1);

            ctx.save();
            ctx.fillStyle="#ff514c";
            var step = this.len / this.nSec;
            for (var i=0; i<this.nSec; i++)
            {
                ctx.rotate( this.sections[i] );
                if (i % 3 == 0)
                {
                    ctx.beginPath();
                    ctx.arc( -(this.nSec-i), -step*i,10 - (i/3), 0, Math.PI*2, true);
                    ctx.fill();
                }
            }
            ctx.restore();

            ctx.save();
            ctx.fillStyle="#ff514c";
            ctx.beginPath();
            var step = this.len / this.nSec;
            for (var i=0; i<this.nSec; i++)
            {
                ctx.rotate( this.sections[i] );
                ctx.lineTo( -(this.nSec-i), -step*i );
            }

            for (var i=this.nSec-2; i>=0; i--)
            {
                ctx.rotate( -this.sections[i] );
                ctx.lineTo( (this.nSec-i), -step*i );
            }
            ctx.fill();
            ctx.restore();

            ctx.restore();
        };

        this.animate = function()
        {
            var i;
            for (i=0; i<this.nSec; i++)
            {
                this.sections[ i ] = Math.sin( (this.loop - (i * (50 / this.nSec))) / 20 ) / this.nSec;
            }
            this.loop = (this.loop + 1) % ( Math.PI * 360 );
        };

        this.init();
    }

    var oc = new Octopus();

    function tick()
    {
        if (Math.random() > 0.95)
            springs[Math.floor(Math.random() * MAX_SPRINGS)].p = 50;

        ctx.clearRect(0, 0, canvas.width, canvas.height);
        oc.animate();
        oc.render();
        updateSprings( 0.1 );
        renderWaves();
        _requestAnimationFrame(tick);
    }

    tick();
</script>
