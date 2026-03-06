<?php
    $address_icon = file_get_contents(get_template_directory() . '/assets/icons/address_icon.svg');
    $call_icon = file_get_contents(get_template_directory() . '/assets/icons/call_icon.svg');
    $email_icon = file_get_contents(get_template_directory() . '/assets/icons/email_icon.svg');

    $phone = get_field('phone_number', 'option');
    $email = get_field('email', 'option');
    $address = get_field('address', 'option');
?>

<div class="section section-grid">
    <div class="contact-info">
        <h3>Find us</h3>
        <div class="info-list">

            <div class="info-item">
                <?=$call_icon;?>
                <div class="info-item-text">
                   <p class="label">Call us</p>
                   <p class="details"><?=$phone;?></p>
                </div>
            </div>

            <div class="info-item">
                <?=$call_icon;?>
                <div class="info-item-text">
                   <p class="label">Email now</p>
                   <p class="details"><?=$email;?></p>
                </div>
            </div>

            <div class="info-item">
                <?=$call_icon;?>
                <div class="info-item-text">
                   <p class="label">Address</p>
                   <p class="details"><?=$address;?></p>
                </div>
            </div>

        </div>
    </div>

    <div class="contact-form">
        <p>Contact info</p>
        <?php echo do_shortcode('[wpforms id="132" title="true" description="true"]'); ?>
    </div>
</div>