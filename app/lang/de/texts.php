<?php

return array(

  // client
  'organization' => 'Organisation',
  'name' => 'Name',
  'website' => 'Webseite',
  'work_phone' => 'Telefon',
  'address' => 'Adresse',
  'address1' => 'Straße',
  'address2' => 'Adresszusatz',
  'city' => 'Stadt',
  'state' => 'Bundesland',
  'postal_code' => 'Postleitzahl',
  'country_id' => 'Land',
  'contacts' => 'Kontakte',
  'first_name' => 'Vorname',
  'last_name' => 'Nachname',
  'phone' => 'Telefon',
  'email' => 'Email',
  'additional_info' => 'Zusätzliche Info',
  'payment_terms' => 'Zahlungsbedingungen',
  'currency_id' => 'Währung',
  'size_id' => 'Größe',
  'industry_id' => 'Kategorie',
  'private_notes' => 'Notizen',

  // invoice
  'invoice' => 'Rechnung',
  'client' => 'Kunde',
  'invoice_date' => 'Rechnungsdatum',
  'due_date' => 'Fällig am',
  'invoice_number' => 'Rechungsnummer',
  'invoice_number_short' => 'Rechnung #',
  'po_number' => 'Bestellnummer',
  'po_number_short' => 'BN #',
  'frequency_id' => 'Wie oft',
  'discount' => 'Rabatt',
  'taxes' => 'Steuern',
  'tax' => 'Steuer',
  'item' => 'Artikel',
  'description' => 'Beschreibung',
  'unit_cost' => 'Kosten pro Einheit',
  'quantity' => 'Menge',
  'line_total' => 'Summe',
  'subtotal' => 'Zwischensumme',
  'paid_to_date' => 'Bereits gezahlt',
  'balance_due' => 'Rechnungsbetrag',
  'invoice_design_id' => 'Design',
  'terms' => 'Bedingungen',
  'your_invoice' => 'Ihre Rechnung',

  'remove_contact' => 'Kontakt löschen',
  'add_contact' => 'Kontakt hinzufügen',
  'create_new_client' => 'Einen neuen Kunden erstellen',
  'edit_client_details' => 'Kundendetails bearbeiten',
  'enable' => 'Aktivieren',
  'learn_more' => 'Mehr erfahren',
  'manage_rates' => 'Steuersätze verwalten',
  'note_to_client' => 'Notiz an den Kunden',
  'invoice_terms' => 'Zahlungsbedingungen',
  'save_as_default_terms' => 'Als Standardbedingungen speichern',
  'download_pdf' => 'PDF herunterladen',
  'pay_now' => 'Jetzt bezahlen',
  'save_invoice' => 'Rechnung speichern',
  'clone_invoice' => 'Rechnung duplizieren',
  'archive_invoice' => 'Rechnung archivieren',
  'delete_invoice' => 'Rechnung löschen',
  'email_invoice' => 'Rechnung versenden',
  'enter_payment' => 'Zahlung eingeben',
  'tax_rates' => 'Steuersätze',
  'rate' => 'Satz',
  'settings' => 'Einstellungen',
  'enable_invoice_tax' => 'Ermögliche das bestimmen einer <strong>Rechnungssteuer</strong>',
  'enable_line_item_tax' => 'Ermögliche das bestimmen von <strong>Steuern für Belegpositionen</strong>',

  // navigation
  'dashboard' => 'Dashboard',
  'clients' => 'Kunden',
  'invoices' => 'Rechnungen',
  'payments' => 'Zahlungen',
  'credits' => 'Guthaben',
  'history' => 'Verlauf',
  'search' => 'Suche',
  'sign_up' => 'Anmeldung',
  'guest' => 'Gast',
  'company_details' => 'Firmendaten',
  'online_payments' => 'Online-Zahlungen',
  'notifications' => 'Benachrichtigungen',
  'import_export' => 'Import/Export',
  'done' => 'Erledigt',
  'save' => 'Speichern',
  'create' => 'Erstellen',
  'upload' => 'Hochladen',
  'import' => 'Importieren',
  'download' => 'Downloaden',
  'cancel' => 'Abbrechen',
  'provide_email' => 'Bitte gebe eine gültige E-Mail Adresse an',
  'powered_by' => 'Powered by',
  'no_items' => 'Keine Objekte',

  // recurring invoices
  'recurring_invoices' => 'Wiederkehrende Rechnungen',
  'recurring_help' => '<p>Sende deinen Kunden automatisch die selbe Rechnung wöchentlich, zwei-monatlich, monatlich, vierteljährlich oder jährlich.</p>
        <p>Benutze :MONTH, :QUARTER oder :YEAR für ein dynamisches Datum. Grundlegende Mathematik funktioniert genauso gut, zum Beispiel :MONTH-1.</p>
        <p>Beispiel zu dynamischen Rechnungs-Variabeln:</p>
        <ul>
          <li>"Fitnessstudio Mitgliedschaft für den Monat :MONTH" => "Fitnessstudio Mitgliedschaft für den Monat Juli"</li>
          <li>":YEAR+1 Jahresbeitrag" => "2015 Jahresbeitrag"</li>
          <li>"Vorschusszahlung für :QUARTER+1" => "Vorschusszahlung für Q2"</li>
        </ul>',

  // dashboard
  'in_total_revenue' => 'Gesamtumsatz',
  'billed_client' => 'abgerechneter Kunde',
  'billed_clients' => 'abgerechnete Kunden',
  'active_client' => 'aktive Kunden',
  'active_clients' => 'aktive Kunden',
  'invoices_past_due' => 'Fällige Rechnungen',
  'upcoming_invoices' => 'Kommende Rechnungen',
  'average_invoice' => 'Durchschnittlicher Rechnungsbetrag',

  // list pages
  'archive' => 'archivieren',
  'delete' => 'löschen',
  'archive_client' => 'Kunde archivieren',
  'delete_client' => 'Kunde löschen',
  'archive_payment' => 'Zahlung archivieren',
  'delete_payment' => 'Zahlung löschen',
  'archive_credit' => 'Guthaben archivieren',
  'delete_credit' => 'Guthaben löschen',
  'show_archived_deleted' => 'Zeige archivierte/gelöschte',
  'filter' => 'Filter',
  'new_client' => 'Neuer Kunde',
  'new_invoice' => 'Neue Rechnung',
  'new_payment' => 'Neue Zahlung',
  'new_credit' => 'Neues Guthaben',
  'contact' => 'Kontakt',
  'date_created' => 'Erstellungsdatum',
  'last_login' => 'Letzter Login',
  'balance' => 'Saldo',
  'action' => 'Aktion',
  'status' => 'Status',
  'invoice_total' => 'Rechnungsbetrag',
  'frequency' => 'Häufigkeit',
  'start_date' => 'Startdatum',
  'end_date' => 'Enddatum',
  'transaction_reference' => 'Abwicklungsreferenz',
  'method' => 'Verfahren',
  'payment_amount' => 'Zahlungsbetrag',
  'payment_date' => 'Zahlungsdatum',
  'credit_amount' => 'Guthabenbetrag',
  'credit_balance' => 'Guthabenstand',
  'credit_date' => 'Guthabendatum',
  'empty_table' => 'Es sind keine Daten vorhanden',
  'select' => 'Wählen',
  'edit_client' => 'Kunde bearbeiten',
  'edit_invoice' => 'Rechnung bearbeiten',

  // client view page
  'create_invoice' => 'Rechnung erstellen',
  'enter_credit' => 'Guthaben eingeben',
  'last_logged_in' => 'Zuletzt eingeloggt',
  'details' => 'Details',
  'standing' => 'Aktueller Stand',
  'credit' => 'Guthaben',
  'activity' => 'Aktivität',
  'date' => 'Datum',
  'message' => 'Nachricht',
  'adjustment' => 'Anpassung',
  'are_you_sure' => 'Bist du dir sicher?',

  // payment pages
  'payment_type_id' => 'Zahlungsart',
  'amount' => 'Betrag',

  // account/company pages
  'work_email' => 'E-Mail',
  'language_id' => 'Sprache',
  'timezone_id' => 'Zeitzone',
  'date_format_id' => 'Datumsformat',
  'datetime_format_id' => 'Datums-/Zeitformat',
  'users' => 'Benutzer',
  'localization' => 'Lokalisierung',
  'remove_logo' => 'Logo entfernen',
  'logo_help' => 'Unterstützt: JPEG, GIF und PNG. Empfohlene Höhe: 120px',
  'payment_gateway' => 'Zahlungseingang',
  'gateway_id' => 'Provider',
  'email_notifications' => 'E-Mail Benachrichtigungen',
  'email_sent' => 'Benachrichtigen, wenn eine Rechnung <strong>versendet</strong> wurde',
  'email_viewed' => 'Benachrichtigen, wenn eine Rechnung <strong>betrachtet</strong> wurde',
  'email_paid' => 'Benachrichtigen, wenn eine Rechnung <strong>bezahlt</strong> wurde',
  'site_updates' => 'Seiten Updates',
  'custom_messages' => 'Benutzerdefinierte Nachrichten',
  'default_invoice_terms' => 'Standard Rechnungsbedingungen',
  'default_email_footer' => 'Standard E-Mail Signatur',
  'import_clients' => 'Importiere Kundendaten',
  'csv_file' => 'Wähle CSV Datei',
  'export_clients' => 'Exportiere Kundendaten',
  'select_file' => 'Bitte wähle eine Datei',
  'first_row_headers' => 'Benutze erste Zeile als Kopfzeile',
  'column' => 'Spalte',
  'sample' => 'Beispiel',
  'import_to' => 'Importieren nach',
  'client_will_create' => 'Kunde wird erstellt',
  'clients_will_create' => 'Kunden werden erstellt',

  // application messages
  'created_client' => 'Kunde erfolgreich angelegt',
  'created_clients' => ':count Kunden erfolgreich angelegt',
  'updated_settings' => 'Einstellungen erfolgreich aktualisiert',
  'removed_logo' => 'Logo erfolgreich entfernt',
  'sent_message' => 'Nachricht erfolgreich versendet',
  'invoice_error' => 'Bitte stelle sicher, dass ein Kunde ausgewählt und alle Fehler behoben wurden',
  'limit_clients' => 'Entschuldige, das überschreitet das Limit von :count Kunden',
  'payment_error' => 'Es ist ein Fehler während der Zahlung aufgetreten. Bitte versuche es später noch einmal.',
  'registration_required' => 'Bitte melde dich an um eine Rechnung zu versenden',
  'confirmation_required' => 'Bitte bestätige deine E-Mail Adresse',

  'updated_client' => 'Kunde erfolgreich aktualisiert',
  'created_client' => 'Kunde erfolgreich erstellt',
  'archived_client' => 'Kunde erfolgreich archiviert',
  'archived_clients' => ':count Kunden erfolgreich archiviert',
  'deleted_client' => 'Kunde erfolgreich gelöscht',
  'deleted_clients' => ':count Kunden erfolgreich gelöscht',

  'updated_invoice' => 'Rechnung erfolgreich aktualisiert',
  'created_invoice' => 'Rechnung erfolgreich erstellt',
  'cloned_invoice' => 'Rechnung erfolgreich dupliziert',
  'emailed_invoice' => 'Rechnung erfolgreich versendet',
  'and_created_client' => 'und Kunde erstellt',
  'archived_invoice' => 'Guthaben erfolgreich archiviert',
  'archived_invoices' => ':count Guthaben erfolgreich archiviert',
  'deleted_invoice' => 'Guthaben erfolgreich gelöscht',
  'deleted_invoices' => ':count Guthaben erfolgreich gelöscht',

  'created_payment' => 'Zahlung erfolgreich erstellt',
  'archived_payment' => 'Zahlung erfolgreich archiviert',
  'archived_payments' => ':count Zahlungen erfolgreich archiviert',
  'deleted_payment' => 'Zahlung erfolgreich gelöscht',
  'deleted_payments' => ':count Zahlungen erfolgreich gelöscht',
  'applied_payment' => 'Zahlung erfolgreich angewandt',

  'created_credit' => 'Guthaben erfolgreich erstellt',
  'archived_credit' => 'Guthaben erfolgreich archiviert',
  'archived_credits' => ':count Guthaben erfolgreich archiviert',
  'deleted_credit' => 'Guthaben erfolgreich gelöscht',
  'deleted_credits' => ':count Guthaben erfolgreich gelöscht',

  // Emails
  'confirmation_subject' => 'Invoice Ninja Konto Bestätigung',
  'confirmation_header' => 'Konto Bestätigung',
  'confirmation_message' => 'Bitte klicke auf den folgenden Link um dein Konto zu bestätigen.',
  'invoice_message' => 'Um Ihre Rechnung über :amount einzusehen, klicken Sie bitte auf den folgenden Link.',
  'payment_subject' => 'Zahlungseingang',
  'payment_message' => 'Vielen Dank für Ihre Zahlung von :amount.',
  'email_salutation' => 'Sehr geehrte/r :name,',
  'email_signature' => 'Freundliche Grüße,',
  'email_from' => 'Das InvoiceNinja Team',
  'user_email_footer' => 'Um deine E-Mail Benachrichtigungen anzupassen besuche bitte '.SITE_URL.'/company/notifications',
  'invoice_link_message' => 'Um deine Kundenrechnung anzuschauen, klicke auf den folgenden Link:',
  'notification_invoice_paid_subject' => 'Die Rechnung :invoice wurde von :client bezahlt',
  'notification_invoice_sent_subject' => 'Die Rechnung :invoice wurde an :client versendet',
  'notification_invoice_viewed_subject' => 'Die Rechnung :invoice wurde von :client angeschaut',
  'notification_invoice_paid' => 'Eine Zahlung von :amount wurde von :client bezüglich Rechnung :invoice getätigt.',
  'notification_invoice_sent' => 'Dem folgenden Kunden :client wurde die Rechnung :invoice über :amount zugesendet.',
  'notification_invoice_viewed' => 'Der folgende Kunde :client hat sich Rechnung :invoice über :amount angesehen.',
  'reset_password' => 'Du kannst dein Passwort zurücksetzen indem du auf den folgenden Link klickst:',
  'reset_password_footer' => 'Wenn du das Zurücksetzen des Passworts nicht beantragt hast benachrichtige bitte unseren Support: ' . CONTACT_EMAIL,

  // Payment page
  'secure_payment' => 'Sichere Zahlung',
  'card_number' => 'Kartennummer',
  'expiration_month' => 'Ablaufmonat',
  'expiration_year' => 'Ablaufjahr',
  'cvv' => 'Kartenprüfziffer',

  // Security alerts
  'confide' => array(
    'too_many_attempts' => 'Zu viele versuche. Bitte versuche es in ein paar Minuten erneut.',
    'wrong_credentials' => 'Falsche E-Mail Adresse oder falsches Passwort.',
    'confirmation' => 'Dein Konto wurde bestätigt!',
    'wrong_confirmation' => 'Falscher Bestätigungscode.',
    'password_forgot' => 'Weitere Informationen um das Passwort zurückzusetzen wurden dir per E-Mail zugeschickt.',
    'password_reset' => 'Dein Passwort wurde erfolgreich geändert.',
    'wrong_password_reset' => 'Ungültiges Passwort. Versuche es erneut',
  ),

  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link um das Invoice Ninja Logo zu entfernen, indem du dem Pro Plan beitrittst',
    'remove_logo_link' => 'Klicke hier',
  ],

  'logout' => 'Ausloggen',
  'sign_up_to_save' => 'Melde dich an, um deine Arbeit zu speichern',
  'agree_to_terms' =>'Ich akzeptiere die Invoice Ninja :terms',
  'terms_of_service' => 'Service-Bedingungen',
  'email_taken' => 'Diese E-Mail Adresse ist bereits registriert',
  'working' => 'Wird bearbeitet',
  'success' => 'Erfolg',
  'success_message' => 'Du hast dich erfolgreich registriert. Bitte besuche den Link in deiner Bestätigungsmail um deine E-Mail Adresse zu verfizieren.',
  'erase_data' => 'Diese Aktion wird deine Daten dauerhaft entfernen.',
  'password' => 'Passwort',
  'invoice_subject' => 'Neue Rechnung von :account',
  'close' => 'Schließen',

  'pro_plan_product' => 'Pro Plan',
  'pro_plan_description' => 'Jahresmitgliedschaft beim Invoice Ninja Pro Plan.',
  'pro_plan_success' => 'Danke für den Beitritt! Sobald die Rechnung bezahlt wurde beginnt deine Pro Plan Mitgliedschaft.',

  'unsaved_changes' => 'Es liegen ungespeicherte Änderungen vor',
  'custom_fields' => 'Benutzerdefinierte Felder',
  'company_fields' => 'Firmenfelder',
  'client_fields' => 'Kundenfelder',
  'field_label' => 'Feldbezeichnung',
  'field_value' => 'Feldwert',
  'edit' => 'Bearbeiten',
  'view_as_recipient' => 'Als Empfänger betrachten',

  // product management
  'product' => 'Produkt',
  'products' => 'Produkte',
  'fill_products' => 'Produkte automatisch ausfüllen',
  'fill_products_help' => 'Beim Auswählen eines Produktes werden automatisch <strong>eine Beschreibung und die Kosten ausgefüllt</strong>',
  'update_products' => 'Produkte automatisch aktualisieren',
  'update_products_help' => 'Beim Aktualisieren einer Rechnung werden die <strong>Produkte automatisch aktualisiert</strong>',
  'create_product' => 'Produkt erstellen',
  'edit_product' => 'Produkt bearbeiten',
  'archive_product' => 'Produkt archivieren',
  'updated_product' => 'Produkt erfolgreich aktualisiert',
  'created_product' => 'Produkt erfolgreich erstellt',
  'archived_product' => 'Produkt erfolgreich archiviert',
  'product_library' => 'Produktbibliothek',
  'pro_plan_custom_fields' => ':link to enable custom fields by joining the Pro Plan',

  'advanced_settings' => 'Advanced Settings',
  'pro_plan_advanced_settings' => ':link to enable the advanced settings by joining the Pro Plan',
  'invoice_design' => 'Invoice Design',
  'specify_colors' => 'Specify colors',
  'specify_colors_label' => 'Select the colors used in the invoice',

  'chart_builder' => 'Diagrammersteller',
  'ninja_email_footer' => 'Nutze :site um Kunden eine Rechnung zu stellen und online bezahlt zu werden, kostenlos!',
  'go_pro' => 'Werde Pro-Mitglied',

  // Quotes
  'quote' => 'Angebot',
  'quotes' => 'Angebote',
  'quote_number' => 'Angebotsnummer',
  'quote_number_short' => 'Angebot #',
  'quote_date' => 'Angebotsdatum',
  'quote_total' => 'Gesamtanzahl Angebote',
  'your_quote' => 'Dein Angebot',
  'total' => 'Gesamt',
  'clone' => 'Duplizieren',

  'new_quote' => 'Neues Angebot',
  'create_quote' => 'Angebot erstellen',
  'edit_quote' => 'Angebot bearbeiten',
  'archive_quote' => 'Angebot archivieren',
  'delete_quote' => 'Angebot löschen',
  'save_quote' => 'Angebot speichern',
  'email_quote' => 'Angebot per E-Mail senden',
  'clone_quote' => 'Angebot duplizieren',
  'convert_to_invoice' => 'In Rechnung umwandeln',
  'view_invoice' => 'Rechnung anschauen',
  'view_quote' => 'Angebot anschauen',
  'view_client' => 'Kunde anschauen',

  'updated_quote' => 'Angebot erfolgreich aktualisiert',
  'created_quote' => 'Angebot erfolgreich erstellt',
  'cloned_quote' => 'Angebot erfolgreich dupliziert',
  'emailed_quote' => 'Angebot erfolgreich versendet',
  'archived_quote' => 'Angebot erfolgreich archiviert',
  'archived_quotes' => ':count Angebote erfolgreich archiviert',
  'deleted_quote' => 'Angebot erfolgreich gelöscht',
  'deleted_quotes' => ':count Angebote erfolgreich gelöscht',
  'converted_to_invoice' => 'Angebot erfolgreich in Rechnung umgewandelt',

  'quote_subject' => 'Neues Angebot von :account',
  'quote_message' => 'Klicke auf den folgenden Link um das Angebot über :amount anzuschauen.',
  'quote_link_message' => 'Klicke auf den folgenden Link um das Angebot deines Kunden anzuschauen:',
  'notification_quote_sent_subject' => 'Angebot :invoice wurde an :client versendet',
  'notification_quote_viewed_subject' => 'Angebot :invoice wurde von :client angeschaut',
  'notification_quote_sent' => 'Der folgende Kunde :client erhielt das Angebot :invoice über :amount.',
  'notification_quote_viewed' => 'Der folgende Kunde :client schaute das Angebot :client über :amount an.',

  'session_expired' => 'Deine Sitzung ist abgelaufen.',

  'invoice_fields' => 'Invoice Fields',
  'invoice_options' => 'Invoice Options',
  'hide_quantity' => 'Hide quantity',
  'hide_quantity_help' => 'If your line items quantities are always 1, then you can declutter invoices by no longer displaying this field.',
  'hide_paid_to_date' => 'Hide paid to date',
  'hide_paid_to_date_help' => 'Only display the "Paid to Date" area on your invoices once a payment has been received.',

  'charge_taxes' => 'Charge taxes',
  'user_management' => 'User Management',
  'add_user' => 'Add User',
  'send_invite' => 'Send invitation',
  'sent_invite' => 'Successfully sent invitation',
  'updated_user' => 'Successfully updated user',
  'invitation_message' => 'You\'ve been invited by :invitor. ',
  'register_to_add_user' => 'Please sign up to add a user',
  'user_state' => 'State',
  'edit_user' => 'Edit User',
  'delete_user' => 'Delete User',
  'active' => 'Active',
  'pending' => 'Pending',
  'deleted_user' => 'Successfully deleted user',
  'limit_users' => 'Sorry, this will exceed the limit of ' . MAX_NUM_USERS . ' users',

  'confirm_email_invoice' => 'Are you sure you want to email this invoice?',
  'confirm_email_quote' => 'Are you sure you want to email this quote?',
  'confirm_recurring_email_invoice' => 'Recurring is enabled, are you sure you want this invoice emailed?',

  'cancel_account' => 'Cancel Account',
  'cancel_account_message' => 'Warning: This will permanently erase all of your data, there is no undo.',
  'go_back' => 'Go Back',

  'data_visualizations' => 'Data Visualizations',
  'sample_data' => 'Sample data shown',
  'hide' => 'Hide',
  'new_version_available' => 'A new version of :releases_link is available. You\'re running v:user_version, the latest is v:latest_version',

  'invoice_settings' => 'Invoice Settings',
  'invoice_number_prefix' => 'Invoice Number Prefix',
  'invoice_number_counter' => 'Invoice Number Counter',
  'quote_number_prefix' => 'Quote Number Prefix',
  'quote_number_counter' => 'Quote Number Counter',
  'share_invoice_counter' => 'Share invoice counter',
  'invoice_issued_to' => 'Invoice issued to',
  'invalid_counter' => 'To prevent a possible conflict please set either an invoice or quote number prefix',
  'mark_sent' => 'Mark sent',

  'gateway_help_1' => ':link to sign up for Authorize.net.',
  'gateway_help_2' => ':link to sign up for Authorize.net.',
  'gateway_help_17' => ':link to get your PayPal API signature.',
  'gateway_help_23' => 'Note: use your secret API key, not your publishable API key.',
  'gateway_help_27' => ':link to sign up for TwoCheckout.',

  'more_designs' => 'More designs',
  'more_designs_title' => 'Additional Invoice Designs',
  'more_designs_cloud_header' => 'Go Pro for more invoice designs',
  'more_designs_cloud_text' => '',
  'more_designs_self_host_header' => 'Get 6 more invoice designs for just $20',
  'more_designs_self_host_text' => '',
  'buy' => 'Buy',
  'bought_designs' => 'Successfully added additional invoice designs',

  'sent' => 'sent',
  'timesheets' => 'Timesheets',

  'payment_title' => 'Geben Sie Ihre Rechnungsadresse und Ihre Kreditkarteninformationen ein',
  'payment_cvv' => '*Dies ist die 3-4-stellige Nummer auf der Rückseite Ihrer Kreditkarte',
  'payment_footer1' => '*Die Rechnungsadresse muss mit der Adresse der Kreditkarte übereinstimmen.',
  'payment_footer2' => '*Bitte drücken Sie nur einmal auf "Jetzt bezahlen" - die  Verarbeitung der Transaktion kann bis zu einer Minute dauern.',
  'vat_number' => 'USt-IdNr.',

  'id_number' => 'ID-Nummer',
  'white_label_link' => 'Branding entfernen',
  'white_label_text' => 'Um das Invoice Ninja Logo auf der Kundenseite zu entfernen, kaufe bitte eine Lizenz für $10.00.',
  'white_label_header' => 'Branding entfernen',
  'bought_white_label' => 'Branding-freie Lizenz erfolgreich aktiviert',
  'white_labeled' => 'Branding entfernt',

  'restore' => 'Wiederherstellen',
  'restore_invoice' => 'Rechnung wiederherstellen',
  'restore_quote' => 'Angebot wiederherstellen',
  'restore_client' => 'Kunde wiederherstellen',
  'restore_credit' => 'Guthaben wiederherstellen',
  'restore_payment' => 'Zahlung wiederherstellen',

  'restored_invoice' => 'Rechnung erfolgreich wiederhergestellt',
  'restored_quote' => 'Angebot erfolgreich wiederhergestellt',
  'restored_client' => 'Kunde erfolgreich wiederhergestellt',
  'restored_payment' => 'Zahlung erfolgreich wiederhergestellt',
  'restored_credit' => 'Guthaben erfolgreich wiederhergestellt',
  
  'reason_for_canceling' => 'Hilf uns, unser Angebot zu verbessern, indem du uns mitteilst, weswegen du gehst.',
  'discount_percent' => 'Prozent',
  'discount_amount' => 'Wert',

  'invoice_history' => 'Rechnungshistorie',
  'quote_history' => 'Angebotshistorie',
  'current_version' => 'Aktuelle Version',
  'select_versiony' => 'Version auswählen',
  'view_history' => 'Historie anzeigen',

  'edit_payment' => 'Zahlung bearbeiten',
  'updated_payment' => 'Zahlung erfolgreich aktualisiert',
  'deleted' => 'Gelöscht',
  'restore_user' => 'Benutzer wiederherstellen',
  'restored_user' => 'Benutzer erfolgreich wiederhergestellt',
  'show_deleted_users' => 'Zeige gelöschte Benutzer',
  'email_templates' => 'E-Mail Vorlagen',
  'invoice_email' => 'Rechnungsmail',
  'payment_email' => 'Zahlungsmail',
  'quote_email' => 'Angebotsmail',
  'reset_all' => 'Alle zurücksetzen',
  'approve' => 'Approve',

  'token_billing_type_id' => 'Token Billing',
  'token_billing_help' => 'Enables you to store credit cards with your gateway, and charge them at a later date.',
  'token_billing_1' => 'Disabled',
  'token_billing_2' => 'Opt-in - checkbox is shown but not selected',
  'token_billing_3' => 'Opt-out - checkbox is shown and selected',
  'token_billing_4' => 'Always',
  'token_billing_checkbox' => 'Store credit card details',
  'view_in_stripe' => 'View in Stripe',
  'use_card_on_file' => 'Use card on file',
  'edit_payment_details' => 'Edit payment details',
  'token_billing' => 'Save card details',
  'token_billing_secure' => 'The data is stored securely by :stripe_link',

  'support' => 'Support',
  'contact_information' => 'Contact information',
  '256_encryption' => '256-Bit Encryption',
  'amount_due' => 'Amount due',
  'billing_address' => 'Billing address',
  'billing_method' => 'Billing method',
  'order_overview' => 'Order overview',
  'match_address' => '*Address must match address accociated with credit card.',
  'click_once' => '*Please click "PAY NOW" only once - transaction may take up to 1 minute to process.',

  'default_invoice_footer' => 'Set default invoice footer',
  'invoice_footer' => 'Invoice footer',
  'save_as_default_footer' => 'Save as default footer',

);
