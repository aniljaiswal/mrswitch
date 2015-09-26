<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Service;

class PopulateServices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'populate:services';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command generates the intial set of services available for booking.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $services = ['general_electrical_work' =>
                                             ['price' => '200.00', 'description' =>
                                             "If you're not having previous experience making electrical repairs, it’s always good to hire electricians to get your electrical repairs at home. Minor electrical works are quite common in every household. Choose general electrical work for jobs like doorbell installation, doorbell repair, table lamp repair, bulb socket repair, bulb fitting, tube light fitting, wiring, fuse repair etc."],
                     'ceiling_fan_installation_or_repair'=>
                                             ['price' => '250.00', 'description' =>
                                             "Ceiling fan installation takes a couple of hours. Common problems with ceiling fans are fan making noise, fan regulator not working, fan not turning-on, fan vibrating etc." ],
                     'wall_fan_installation_or_repair'=>
                                             ['price' => '300.00', 'description' =>
                                             "You may also need to drill through the wall to fix  the base on which the wall fan will be installed. Wall fan installation takes a couple of hours. Common problems with wall fan are wall fan making noise, wall fan regulator not working, wall fan not turning-on, wall fan vibrating etc."],
                     'exhaust_fan_installation_or_repair'=>
                                             ['price' => '200.00', 'description' =>
                                             "An exhaust fan is used to remove al kinds of smoke and unwanted smell produced in the kitchen and to help ventilate it. It can also help in dissipating the accumulated heat from the stoves and ovens out of the kitchen. Exhaust fan installation takes a couple of hours. Common problems with exhaust fan include exhaust fan making noise, exhaust fan not turning-on, exhaust fan vibrating etc."],
                     'mcb_or_fuse_repair'=>
                                             ['price' => '250.00', 'description' =>
                                             "Once they detect abnormality in the current levels and immediately break the circuit protecting electrical appliance from damage. MCB is reusable but fuse needs to be replaced every time it goes faulty."],
                     'lamps_and_lights_fitting'=>
                                             ['price' => '200.00', 'description' =>
                                             "Mr. Switch electricians are skilled and equipped to carry out all kinds of electrical and light fittings including wall lights, tube lights, CFL, LED bulb, and other light installations. Some common problems with lamps and lighting are socket damage, bulb or tube light flickering, fuse light or bulb, tube light frame damage, tube light starter damage etc."],
                     'power_outlet_and_socket_repair'=>
                                             ['price' => '200.00', 'description' =>
                                             "The best way to go around the problem is to hire expert electricians who will take all the necessary steps to ensure your safety and can do the job for you. Common problems with power outlets and sockets are sparking in socket, socket burn, wiring problem in socket, broken socket replacement etc."],
                     'inverter_not_working'=>
                                             ['price' => '250.00', 'description' =>
                                             "And like every other electrical device, requires repairs and maintenance. Few reasons behind an inverter not working or turning on are blown fuse, faulty PCB, wiring issue etc. A good care of inverters improves their efficiency."],
                     'inverter_noise_problem'=>
                                             ['price' => '300.00', 'description' =>
                                             "It is encapsulated under a metal enclosure to suppress any noise coming from the equipment. The factors that cause noise irregular from inverter are faulty PCB, faulty inverter fan, wiring issue etc."],
                     'inverter_sparking_problem'=>
                                             ['price' => '300.00', 'description' =>
                                             "Sparking from inverter can be due to faulty internal wiring, loose wire, faulty plug, faulty cable or cord."],
                     'inverter_battery_backup_problem'=>
                                             ['price' => '200.00', 'description' =>
                                             "It is made up of battery containing fluids and other electrical circuits that need to be  replenished on a regular basis. If not done regularly, the problem arises. An inverter also usually fails to charge when there is a fault in PCB, low water level in battery, battery damage, blown fuse or some internal wiring issues."],
                     'geyser_does_not_heat_water'=>
                                             ['price' => '200.00', 'description' =>
                                             "One of the most common problems with geyser is that it does not heat water. And the reasons are pretty simple. The two popular reasons behind this issue are damaged thermostat and damaged heating elements. Both can be repaired or replaced easily without affecting the heating capacity of the geysers."],
                     'geyser_installation'=>
                                             ['price' => '300.00', 'description' =>
                                             "Geyser installation must be carried out properly or it may lead to unnecessary plumbing issues or even health hazards. Geyser installation takes a couple of hours. Important points to consider while geyser installation are adequate space for geyser unit, correct height from ground, secure electrical connection, clean and clog free water line and pipes."],
                     'geyser_leakage_problem'=>
                                             ['price' => '200.00', 'description' =>
                                             "Geyser leakage problem may also lead to health and safety issues. Water leaking from geyser indicates several diagnosis, ranging from loose drain valves to high pressure build up inside geyser to a corroded water tank."],
                     'water_motor_repair'=>
                                             ['price' => '200.00', 'description' =>
                                             "Water pump makes noise when its impeller gets damaged or the pump bearing gets worn out. Water motor requires adequate voltage and water pressure for its operation. But if the voltage and water pressure are too low, motor gets heated up. Other reasons for motor heating are improper ventilation and incorrect motor wiring."],
                     'electrical_wiring'=>
                                             ['price' => '200.00', 'description' =>
                                             "Every house is equipped with electrical wiring installation that provides the electricity required to power all electronic appliances. Although it’s part of the construction phase, there may – on rare occasions – be a requirement for further installation. There may also be a need to troubleshoot electrical wiring due to factors such as deterioration of wires or a short circuit. Electrical wiring installation is something only an expert electrician should be given incharge of."],
                     'something_else_describe_your_problem'=>
                                             ['price' => '200.00', 'description' => 'Not covered in any other service. Describe your problem in detail.']
                    ];

        if (Service::whereIn('service_code', $services)->get()->isEmpty())
        {
            foreach ($services as $service => $inner)
            {
                $newService = new Service;
                $newService['service_code'] = $service;
                $newService['service_label'] = ucwords(str_replace('_', ' ', $service));
                $newService['price'] = $inner['price'];
                $newService['description'] = $inner['description'];
                $newService->save();
            }
            $this->info('Initial services created. Exiting.');
        }
    }
}
