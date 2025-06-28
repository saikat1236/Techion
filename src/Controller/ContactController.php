use Cake\Mailer\Mailer;

public function sendContactMail()
{
    if ($this->request->is('post')) {
        $data = $this->request->getData();

        $message = <<<EOT
New Contact Form Submission:

First Name: {$data['first_name']}
Last Name: {$data['last_name']}
Phone: {$data['phone']}
Email: {$data['email']}
Service Type: {$data['service_type']}
Message: {$data['message']}
EOT;

        $mailer = new Mailer('default');
        $mailer->setFrom(['yourgmail@gmail.com' => 'Website Contact Form'])
            ->setTo('saikat1236@gmail.com')
            ->setSubject('New Contact Form Submission')
            ->deliver($message);

        $this->Flash->success('Thank you! Your message has been sent.');
        return $this->redirect($this->referer());
    }

    throw new \Cake\Http\Exception\MethodNotAllowedException();
}
