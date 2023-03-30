use Rabiesteams\orangecisms\OrangeciSmsInterface;

class MyController extends Controller
{
    public function sendSms(SMSInterface $sms)
    {
        $recipient = '0123456789';
        $message = 'Mon message SMS';

        $sms->sendSMS($recipient, $message);
    }
}
