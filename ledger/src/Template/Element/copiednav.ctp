
   <header>
        <?= $this->Html->image('ledgers.svg',[
            'class' => 'logo',
            'url' => [
                'controller' => 'ledgers',
                'action' => 'index',
            ],
        ]
    ) ?>
       <nav>
           <ul class="nav__links">
               <li><a href="#">Services</a></li>
               <li><a href="#">Projects</a></li>
               <li><a href="#">About</a></li>
           </ul>
       </nav>
       <a class="cta" href="#"><button>Contact</button></a>
   </header>
