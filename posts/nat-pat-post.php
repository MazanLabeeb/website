<?php
require("./../partials/header.php");
?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/assets/img/post-img/post-nat-pat-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>nat / pat the unsung heroes of networking</h1>
                            <h2 class="subheading">Get the lowdown on NAT and PAT and how they can help you connect to the internet.</h2>
                            <span class="meta">
                                Posted by
                                <a href="#!">Lahrasab Ramzan</a>
                                on December 28, 2022
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2 class="section-heading">NAT</h2>
                        <p>Network Address Translation (NAT) is a networking technique that allows multiple devices on a local network to share a single public IP address. This is accomplished by translating the private IP addresses of devices on the local network into a single, public IP address 
                        that is used to communicate with the internet. NAT can help conserve IP addresses, improve security, and enable connectivity for devices 
                        on a local network.</p>
                        <h2 class="section-heading">PAT</h2>
                        <p>Port Address Translation (PAT) is a technique used in network address translation (NAT) that enables a single network device, such as a router, to translate the IP address and port number of packets passing through it. This allows multiple devices on a local network to share a single public IP address and access the internet. PAT is commonly used to conserve IP addresses and improve network security by hiding the internal network structure from external devices.</p>
                        
                        <h2 class="section-heading">NAT commands on a cisco router</h2>
                        <code>
                        1. ip nat inside source list <access-list-name> interface <interface-name> overload 
                            <br>
                        2. ip nat inside source static <local-ip> <global-ip>
                            <br>
                        3. ip nat inside
                            <br>
                        4. ip nat outside
                            <br>
                        5. ip nat enable  
                        </code>

                        <h2 class="section-heading">Explanation of the above commands respectively</h2>
                        
                        <p>
                            <li>First command specifies the inside interfaces and the source IP addresses that will be translated, as well as the interface and IP address that will be used for the translations.
                            </li>
                                <br>
                            <li>Second command specifies a static NAT mapping, which translates a specific local IP address to a specific global IP address.
                            </li>
                                <br>
                            <li>In third and fourth command uses the ip nat inside and ip nat outside commands to identify the inside and outside interfaces on the router.
                            </li>
                                <br>
                            <li>
                            Fifth command uses the ip nat enable command to enable NAT on the router.
                            </li>
                            <br>
                            <pre>To verify:</pre>
                            <code> R1#show ip nat translations </code>
                        </p>
                        
                        <p>For example, to configure PAT on a Cisco router with an inside interface named "Ethernet0" and an outside interface named "Ethernet1" using the IP address 192.168.1.1, you can use the following command:</p>
                        <pre> > ip nat inside source list 1 interface Ethernet1 overload</pre>
                        <br>
                        <br>
                        <a href="#!"><img class="img-fluid" src="/assets/img/post-img/pat_explanation.jpg" alt="..." /></a>
                        <span class="caption text-muted">PAT uses unique source port numbers on the inside global (public) IP address to distinguish between translations.</span>
                        
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
<?php
require("./../partials/footer.php");
?>
